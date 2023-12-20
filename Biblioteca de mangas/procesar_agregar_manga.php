<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    $descripcion = $_POST['descripcion'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO mangas (titulo, autor, genero, fecha_publicacion, descripcion)
            VALUES ('$titulo', '$autor', '$genero', '$fecha_publicacion', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Manga agregado correctamente.";
    } else {
        echo "Error al agregar manga: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirigir si se intenta acceder directamente a este script
    header('Location: index.php');
    exit();
}
?>
