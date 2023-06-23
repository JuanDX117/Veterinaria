<?php
// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$raza = $_POST["raza"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$color = $_POST["color"];

// Realizar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la tabla "animal"
$sql = "INSERT INTO animal (nombre, raza, fecha_nacimiento, sexo, color) 
        VALUES ('$nombre', '$raza', '$fecha_nacimiento', '$sexo', '$color')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registro de animal guardado correctamente.'); window.location.href = 'index.php';</script>";
} else {
    echo "Error al guardar el registro de animal: " . $conn->error;
}

$conn->close();
?>
