<?php
session_start();

// Incluir la configuración de la base de datos
include("conexion.php");

// Verificar si el formulario de inicio de sesión fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de inicio de sesión
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ... (Resto del código de inicio de sesión)
}

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['id_usuario']) && $_SESSION['role'] === 'user') {
    // Código del panel de usuario
    include("user_panel.php");
} else {
    // Código del formulario de inicio de sesión
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="login-container">
            <h2>Iniciar Sesión</h2>
            <form method="post" action="">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </body>
    </html>
    <?php
}

// Cierra la conexión al final del script
$conn->close();
?>
