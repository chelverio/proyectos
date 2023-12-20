<!-- login.php -->
<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Procesa el inicio de sesión aquí
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Realiza la autenticación en la base de datos
    // Aquí deberías realizar una consulta SQL para verificar las credenciales
    // y obtener el rol del usuario.

    // Si las credenciales son válidas, establece las variables de sesión
    // y redirige al usuario a la página principal.
    // ...

    header('Location: index.php');
    exit();
}
?>

<form action="" method="post">
    <label for="username">Usuario:</label>
    <input type="text" name="username" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit" name="login">Iniciar Sesión</button>
</form>
