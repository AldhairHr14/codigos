<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dia = htmlspecialchars($_POST['dia']);
    $hora = htmlspecialchars($_POST['hora']);
    $personas = htmlspecialchars($_POST['personas']);
    $comentarios = htmlspecialchars($_POST['comentarios']);
    
    // Insertar reserva en la base de datos
    $usuario_id = $_SESSION['user_id'];
    
    $stmt = $conn->prepare("INSERT INTO reservas (dia, hora, personas, comentarios, usuario_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $dia, $hora, $personas, $comentarios, $usuario_id);

    if ($stmt->execute()) {
        echo "Reserva realizada con éxito.";
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>