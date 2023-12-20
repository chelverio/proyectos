<!-- agregar_manga.php -->
<form action="" method="post">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required>

    <label for="genero">Género:</label>
    <input type="text" name="genero" required>

    <label for="fecha_publicacion">Fecha de Publicación:</label>
    <input type="date" name="fecha_publicacion" required>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <button type="submit" name="comprar_manga">Comprar Manga</button>
</form>

<?php
include('conexion.php');

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comprar_manga'])) {
    // Obtener los datos del formulario
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $autor = isset($_POST['autor']) ? $_POST['autor'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $fecha_publicacion = isset($_POST['fecha_publicacion']) ? $_POST['fecha_publicacion'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';

    // Insertar datos en la base de datos
    $sql = "INSERT INTO mangas (titulo, autor, genero, fecha_publicacion, descripcion)
            VALUES ('$titulo', '$autor', '$genero', '$fecha_publicacion', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Manga comprado correctamente.";
    } else {
        echo "Error al comprar manga: " . $conn->error;
    }

    // Cerrar la conexión después de realizar todas las operaciones
    $conn->close();
}
?>

<form action="" method="post">
    <!-- Campos del formulario... -->

    <button type="submit" name="comprar_manga">Comprar Manga</button>
</form>

<?php
// Mostrar mensaje de éxito de compra si es necesario
if ($compraExitosa) {
    echo "<p>Felicidades por tu compra</p>";
}
?>