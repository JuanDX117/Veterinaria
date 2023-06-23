<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Procesar el formulario de registro de médico
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    
    // Insertar los datos en la tabla medico
    $sql = "INSERT INTO medico (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
    } else {
        echo "Error al registrar el médico: " . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrar Médico</title>
    <style>
        body {
            background-color: #F0F3F5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            width: 400px;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            color: #333333;
            display: block;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"] {
            background-color: #F5F7F9;
            border: none;
            border-radius: 4px;
            color: #333333;
            font-size: 14px;
            padding: 8px 12px;
            margin-bottom: 15px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #4A90E2;
            border: none;
            border-radius: 4px;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 14px;
            padding: 12px 20px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #357AE8;
        }

        button {
            background-color: transparent;
            border: none;
            color: #4A90E2;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            text-decoration: underline;
        }

        button:hover {
            color: #357AE8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registrar Médico</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
        
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>
        
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" required>
        
            <input type="submit" value="Registrar">
        </form>
        <button onclick="window.location.href = 'index.php';">Volver</button>
    </div>
</body>
</html>
