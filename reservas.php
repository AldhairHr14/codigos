<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Neko House</title>
    <link rel="stylesheet" href="stylereservas.css">
</head>
<body>
    <div class="container">
        <h1>Reserva tu Mesa</h1>
        <form action="procesar_reserva.php" method="POST">
            <label for="dia">Día:</label>
            <input type="date" id="dia" name="dia" required>
            
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required>
            
            <label for="personas">Número de personas:</label>
            <select id="personas" name="personas" required>
                <option value="" disabled selected>Seleccionar...</option>
                <option value="1">1 persona</option>
                <option value="2">2 personas</option>
                <option value="3">3 personas</option>
                <option value="4">4 personas</option>
                <option value="5">5 personas</option>
                <option value="6">6 personas</option>
                <option value="7">7 personas</option>
                <option value="8">8 personas</option>
                <option value="9+">Más de 8 personas</option>
            </select>

            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4" placeholder="¿Algo especial que debamos saber?"></textarea>

            <button type="submit">Reservar</button>
        </form>

    </div>
</body>
</html>
