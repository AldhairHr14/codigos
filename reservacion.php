<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = intval($_POST['personas']);

    // Validación básica
    if ($nombre && $correo && $fecha && $hora && $personas > 0) {
        echo "<p>Reservación completada para $nombre el $fecha a las $hora para $personas personas.</p>";
    } else {
        echo "<p>Por favor completa todos los campos correctamente.</p>";
    }
}
?>
<form method="POST">
    <label>Nombre: <input type="text" name="nombre" required></label><br>
    <label>Correo: <input type="email" name="correo" required></label><br>
    <label>Fecha: <input type="date" name="fecha" required></label><br>
    <label>Hora: <input type="time" name="hora" required></label><br>
    <label>No. de Personas: <input type="number" name="personas" required></label><br>
    <button type="submit">Reservar</button>
</form>
