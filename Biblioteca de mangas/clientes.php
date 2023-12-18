<?php
$nombre_cliente = "Nombre Cliente";
$direccion_cliente = "Dirección Cliente";
$email_cliente = "correo@cliente.com";
$telefono_cliente = "123-456-7890";

$sql = "INSERT INTO clientes (nombre, direccion, email, telefono)
        VALUES ('$nombre_cliente', '$direccion_cliente', '$email_cliente', '$telefono_cliente')";
// Resto del código para ejecutar la consulta
?>