<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "veterinaria");

// Verificar si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];

// Insertar los datos en la tabla cliente
$sql = "INSERT INTO cliente (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Cliente registrado correctamente'); window.location.href = 'index.php';</script>";
} else {
    echo "Error al registrar el cliente: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
