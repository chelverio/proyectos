<?php
// Código de conexión (incluido el código anterior)

// Insertar datos de residentes
$sql = "INSERT INTO residentes (nombre, edad, direccion, fecha_ingreso) VALUES
    ('Juan Pérez', 75, 'Calle 123', '2023-01-01'),
    ('María Gómez', 80, 'Avenida XYZ', '2023-02-15')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados con éxito";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
