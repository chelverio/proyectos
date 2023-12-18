<?php
include('conexion.php');

$nombre_funcion = "Función";
$descripcion_funcion = "Descripción de la función";

$sql = "INSERT INTO funciones (nombre, descripcion)
        VALUES ('$nombre_funcion', '$descripcion_funcion')";

if ($conn->query($sql) === TRUE) {
    echo "Función agregada correctamente.";
} else {
    echo "Error al agregar función: " . $conn->error;
}

$conn->close();
?>
//oda//