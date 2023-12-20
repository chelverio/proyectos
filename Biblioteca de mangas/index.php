<!-- index.php -->
<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado y tiene un rol específico
if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
    // Sección para administradores
    echo "<p>Bienvenido, administrador</p>";
} elseif (isset($_SESSION['rol']) && $_SESSION['rol'] === 'lector') {
    // Sección para lectores
    echo "<p>Bienvenido, lector</p>";
} elseif (isset($_SESSION['rol']) && $_SESSION['rol'] === 'usuario') {
    // Sección para usuarios
    echo "<p>Bienvenido, usuario</p>";
} else {
    // Mostrar mensaje para usuarios no autenticados
    echo "<p>Inicia sesión para acceder a las funciones</p>";
}
?>

<!-- Sección para comprar manga -->
<?php if (isset($_SESSION['rol']) && ($_SESSION['rol'] === 'lector' || $_SESSION['rol'] === 'usuario')) : ?>
    <section class="content">
        <h2>Comprar Manga</h2>
        <?php include('agregar_manga.php'); ?>
    </section>
<?php endif; ?>
