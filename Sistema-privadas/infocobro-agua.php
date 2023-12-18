
<?php
$sql = "SELECT * FROM cobro_agua";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID Cobro de Agua: " . $row["id_cobro_agua"] . ", ID Residente: " . $row["id_residente"] . ", Fecha de Cobro: " . $row["fecha_cobro"] . ", Monto: $" . $row["monto"] . "<br>";
    }
} else {
    echo "No hay cobros de agua";
}
?>