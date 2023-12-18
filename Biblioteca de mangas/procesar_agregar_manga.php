<!-- procesar_agregar_manga.php -->
<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    // Otros campos del formulario...

    // Insertar datos en la base de datos
    $sql = "INSERT INTO mangas (titulo, autor, genero, fecha_publicacion, descripcion)
            VALUES ('$titulo', '$autor', '$genero', '$fecha_publicacion', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Manga agregado correctamente.";
    } else {
        echo "Error al agregar manga: " . $conn->error;
    }

    $conn->close();
}
?>
//oda//