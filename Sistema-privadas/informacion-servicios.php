<?php
$sql = "SELECT * FROM servicios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_servicio"] . ", Nombre: " . $row["nombre_servicio"] . ", Costo Mensual: $" . $row["costo_mensual"] . "<br>";
    }
} else {
    echo "No hay servicios disponibles";
}
?>