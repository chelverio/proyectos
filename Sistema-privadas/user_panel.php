<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario']) || $_SESSION['role'] !== 'user') {
    header("Location: index.php");
    exit();
}

// Incluir la configuración de la base de datos
include("conexion.php");

// Obtener el ID del residente que ha iniciado sesión
$idResidente = $_SESSION['id_usuario'];

// Consulta para obtener información del residente
$sqlResidente = "SELECT * FROM residentes WHERE id_residente = $idResidente";
$resultResidente = $conn->query($sqlResidente);
$rowResidente = $resultResidente->fetch_assoc();

// Consulta para obtener los servicios contratados por el residente
$sqlServicios = "SELECT * FROM servicios_contratados WHERE id_residente = $idResidente";
$resultServicios = $conn->query($sqlServicios);

// Consulta para obtener el último cobro de luz
$sqlCobroLuz = "SELECT * FROM cobro_luz WHERE id_residente = $idResidente ORDER BY fecha_cobro DESC LIMIT 1";
$resultCobroLuz = $conn->query($sqlCobroLuz);
$rowCobroLuz = $resultCobroLuz->fetch_assoc();

// Consulta para obtener el último cobro de agua
$sqlCobroAgua = "SELECT * FROM cobro_agua WHERE id_residente = $idResidente ORDER BY fecha_cobro DESC LIMIT 1";
$resultCobroAgua = $conn->query($sqlCobroAgua);
$rowCobroAgua = $resultCobroAgua->fetch_assoc();

// Cierra la conexión al final del script
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="user-panel">
        <h1>Bienvenido, <?php echo $rowResidente['nombre']; ?> </h1>

        <h2>Servicios Contratados:</h2>
        <?php
        if ($resultServicios->num_rows > 0) {
            while ($rowServicio = $resultServicios->fetch_assoc()) {
                echo "<p>Nombre del Servicio: " . $rowServicio["nombre_servicio"] . ", Costo Mensual: $" . $rowServicio["costo_mensual"] . "</p>";
            }
        } else {
            echo "<p>No has contratado ningún servicio.</p>";
        }
        ?>

        <h2>Último Cobro de Luz:</h2>
        <?php
        if ($resultCobroLuz->num_rows > 0) {
            echo "<p>Fecha de Cobro: " . $rowCobroLuz["fecha_cobro"] . ", Monto: $" . $rowCobroLuz["monto"] . "</p>";
        } else {
            echo "<p>No hay cobros de luz registrados.</p>";
        }
        ?>

        <h2>Último Cobro de Agua:</h2>
        <?php
        if ($resultCobroAgua->num_rows > 0) {
            echo "<p>Fecha de Cobro: " . $rowCobroAgua["fecha_cobro"] . ", Monto: $" . $rowCobroAgua["monto"] . "</p>";
        } else {
            echo "<p>No hay cobros de agua registrados.</p>";
        }
        ?>
    </div>
</body>
</html>
