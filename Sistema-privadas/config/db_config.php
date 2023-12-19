<?php
// Parámetros de conexión a la base de datos
$servername = "127.0.0.1";  // Cambia a tu servidor de base de datos
$username = "root@localhost";   // Cambia a tu nombre de usuario de base de datos
$password = ""; // Cambia a tu contraseña de base de datos
$dbname = "biblioteca_mangas";  // Cambia a tu nombre de base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
