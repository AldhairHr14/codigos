<?php
session_start();
require 'conexion.php'; // Asegúrate de tener un archivo para conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Verificar si las contraseñas coinciden
    if ($_POST['password'] !== $_POST['confirm_password']) {
        die("Las contraseñas no coinciden.");
    }

    // Insertar en la base de datos
    $stmt = $conn->prepare("INSERT INTO usuarios (email, password, nombre) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $nombre);

    if ($stmt->execute()) {
        echo "Registro exitoso. Puedes iniciar sesión.";
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>