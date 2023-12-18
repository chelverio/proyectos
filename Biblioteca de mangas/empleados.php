<?php
$nombre_empleado = "Nombre Empleado";
$puesto_empleado = "Puesto Empleado";
$salario_empleado = 50000.00;

$sql = "INSERT INTO empleados (nombre, puesto, salario)
        VALUES ('$nombre_empleado', '$puesto_empleado', $salario_empleado)";
// Resto del código para ejecutar la consulta
?>