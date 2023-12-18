<?php
$servername = "biblioteca_manga";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "biblioteca_manga";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
