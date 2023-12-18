<?php
$sql = "SELECT * FROM mangas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Título: " . $row["titulo"]. " - Autor: " . $row["autor"]. "<br>";
    }
} else {
    echo "No se encontraron mangas.";
}

$conn->close();
?>
