
<?php
$idResidente = 1;  // Reemplaza con el ID del residente correspondiente
$fechaCobro = "2023-03-01";
$lecturaAnterior = 100;
$lecturaActual = 120;
$monto = 35.75;

$sql = "INSERT INTO cobro_luz (id_residente, fecha_cobro, lectura_anterior, lectura_actual, monto) VALUES ($idResidente, '$fechaCobro', $lecturaAnterior, $lecturaActual, $monto)";

if ($conn->query($sql) === TRUE) {
    echo "Cobro de luz agregado con éxito";
} else {
    echo "Error al agregar cobro de luz: " . $conn->error;
}
?>