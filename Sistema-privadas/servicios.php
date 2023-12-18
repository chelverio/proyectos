<?php

$nombreServicio = "Internet";
$descripcionServicio = "Conexión de alta velocidad";
$costoMensual = 30.00;

$sql = "INSERT INTO servicios (nombre_servicio, descripcion, costo_mensual) VALUES ('$nombreServicio', '$descripcionServicio', $costoMensual)";

if ($conn->query($sql) === TRUE) {
    echo "Servicio agregado con éxito";
} else {
    echo "Error al agregar servicio: " . $conn->error;
}
?>