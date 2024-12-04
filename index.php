<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neko House</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>  
        <div class="logo">
            <img src="logo de NekoHouse.png" alt="Logo Neko">
        </div>
        <nav>
            <ul>
                <li><a href="menu.php">Menú</a></li>
                <li><a href="bebidas.php">Bebidas</a></li>
                <li><a href="reservas.php">Reservaciones</a></li>
                <li><a href="ubicaciones.php">Ubicaciones</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    <section class="hero">
        <h1>Bienvenidos a Neko House</h1>
        <p>¡Descubre la mejor experiencia gastronómica!</p>
    </section>

    <footer>
        <div class="footer-links">
            <a href="index.php">Inicio</a>
        </div>
        <div class="contact-info">
            <p>📞 295-7865</p>
            <p>📧 NekoHouse@gmail.com</p>
            <p>📍 Condado del Rey</p>
        </div>
    </footer>
</body>
</html>
