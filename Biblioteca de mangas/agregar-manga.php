<?php
$titulo = "One Piece";
$autor = "Eiichiro Oda";
$genero = "Aventura";
$fecha_publicacion = "1997-07-22";
$descripcion = "Monkey D. Luffy y su tripulación en busca del tesoro One Piece.";

$sql = "INSERT INTO mangas (titulo, autor, genero, fecha_publicacion, descripcion)
        VALUES ('$titulo', '$autor', '$genero', '$fecha_publicacion', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Manga agregado correctamente.";
} else {
    echo "Error al agregar manga: " . $conn->error;
}

$conn->close();
?>
