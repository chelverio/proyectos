<?php

function obtener_servicios() {
    try {
        require 'database.php';

        $sql = "SELECT * FROM serviciosx LIMIT 5;";  // Asumiendo que la tabla se llama 'servicios', corrige si es necesario

        $consulta = mysqli_query($db, $sql);

        echo "<pre>";
        var_dump( mysqli_fetch_assoc($consulta));
        echo "</pre>";

        mysqli_close($db);
    } catch (\Throwable $th) {
        var_dump($th);
    }
    


}

obtener_servicios();


