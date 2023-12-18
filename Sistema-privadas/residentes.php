<?php
// Código de conexión (incluido el código anterior)

// Crear tabla de residentes
$sql = "CREATE TABLE IF NOT EXISTS residentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    edad INT,
    direccion VARCHAR(255),
    fecha_ingreso DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla de residentes creada con éxito";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
