<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

// Verificar si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$id_animal = $_POST["id_animal"];
$fecha_consulta = $_POST["fecha_consulta"];
$diagnostico = $_POST["diagnostico"];
$id_medico = $_POST["id_medico"];

// Insertar los datos en la tabla historial
$sql = "INSERT INTO historial (id_animal, fecha_consulta, diagnostico, id_medico) VALUES ('$id_animal', '$fecha_consulta', '$diagnostico', '$id_medico')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Historia registrada correctamente'); window.location.href = 'index.php';</script>";
} else {
    echo "Error al registrar la historia: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
