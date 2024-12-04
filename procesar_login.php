<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Buscar al usuario en la base de datos
    $stmt = $conn->prepare("SELECT id_usuario, password FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_usuario, $hashed_password);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id_usuario; // Guardar ID del usuario en sesión
            header("Location: index.php"); // Redirigir al index después del inicio de sesión
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No existe un usuario con ese correo electrónico.";
    }

    $stmt->close();
}
?>