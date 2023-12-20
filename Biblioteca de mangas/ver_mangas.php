<!-- ver_mangas.php -->
<?php
include('conexion.php');

// Consultar la lista de mangas desde la base de datos
$sql = "SELECT * FROM mangas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Título</th><th>Autor</th><th>Género</th><th>Fecha de Publicación</th><th>Descripción</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['autor'] . "</td>";
        echo "<td>" . $row['genero'] . "</td>";
        echo "<td>" . $row['fecha_publicacion'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay mangas disponibles.";
}

$conn->close();
?>
