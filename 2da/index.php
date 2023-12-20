<?php
require __DIR__ . '/includes/funciones.php';
$consulta = obtener_Servicios(); // Supongo que deberías tener una función obtenerServicios() en tu archivo funciones.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Agrega aquí tus enlaces a archivos CSS, si es necesario -->
</head>

<body>
    <div class="contenedor-biblioteca">
        <div class="imagen"></div>
        <div class="app">
            <header class="header">
                <h1>Biblioteca Mangas</h1>
            </header>
            <div class="seccion">
                <h2>Servicios</h2>
                <p class="text-center">Elige tus servicios a continuación</p>
                <div id="servicios" class="listado-servicios">
                    <?php
                    while ($servicio = mysqli_fetch_assoc($consulta)) {
                    ?>
                        <div class="servicio">
                            <p class="nombre-servicio"><?php echo $servicio['nombre']; ?></p>
                            <p class="nombre-servicio"><?php echo $servicio['nombre']; ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Agrega aquí tus enlaces a archivos JS, si es necesario -->
</body>

</html>
