<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Neko House</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="procesar_login.php" method="POST">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>

                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="register-box">
            <h3>¿Aún no tienes una cuenta?</h3>
            <a href="registro.php" class="btn-register">Registrarse</a>
        </div>
        <!-- Botón para regresar al índice -->
        <div class="back-button">
            <a href="index.php" class="btn-back">Regresar a Inicio</a>
        </div>
    </div>
</body>
</html>
