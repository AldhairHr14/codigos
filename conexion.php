<?php
$servername = "localhost"; // Cambia esto si es necesario
$username = "root"; // Cambia esto por tu usuario MySQL
$password = ""; // Cambia esto por tu contraseña MySQL
$dbname = "nekohouse";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>