<?php
// admin_dashboard.php
session_start();

// Verifica si el usuario ha iniciado sesión y tiene rol de administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Aquí puedes incluir el contenido específico del panel de administrador
?>
