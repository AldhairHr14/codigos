<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Neko House</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Registro</h2>
            <form action="procesar_registro.php" method="POST">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre completo" required>

                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>

                <label for="confirm_password">Confirmar Contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña" required>

                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</body>
</html>