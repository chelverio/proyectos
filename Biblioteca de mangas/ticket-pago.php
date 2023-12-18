<?php
include('conexion.php');

$id_cliente = 1; // ID del cliente
$id_funcion = 1; // ID de la función
$cantidad_entradas = 2;
$total_pago = 20.00;

$sql = "INSERT INTO tickets (id_cliente, id_funcion, cantidad_entradas, total_pago)
        VALUES ($id_cliente, $id_funcion, $cantidad_entradas, $total_pago)";

if ($conn->query($sql) === TRUE) {
    echo "Ticket de pago agregado correctamente.";
} else {
    echo "Error al agregar ticket de pago: " . $conn->error;
}

$conn->close();
?>
//oda//