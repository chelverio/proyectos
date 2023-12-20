<?php
// user_panel.php
session_start();

// Verifica si el usuario ha iniciado sesión y tiene rol de usuario
if (!isset($_SESSION['id_usuario']) || $_SESSION['role'] !== 'user') {
    header("Location: index.php");
    exit();
}

// Aquí puedes incluir el contenido específico del panel de usuario
?>
