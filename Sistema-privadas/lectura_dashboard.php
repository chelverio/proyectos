<?php
// lectura_dashboard.php
session_start();

// Verifica si el usuario ha iniciado sesión y tiene el rol adecuado
if (!isset($_SESSION['id_usuario']) || $_SESSION['role'] !== 'lectura') {
    header("Location: index.php"); // Redirige a la página de inicio de sesión si no está autenticado o no tiene el rol adecuado
    exit();
}

// El contenido del panel de lectura va aquí
echo "Bienvenido al panel de lectura";
?>
