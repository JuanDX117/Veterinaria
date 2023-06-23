<!DOCTYPE html>
<html>
<head>
    <title>Consultar Animales</title>
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

        p {
            color: #333333;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: left;
        }

        hr {
            border: 1px solid #CCCCCC;
            margin: 20px 0;
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
        <h1>Animales Registrados</h1>

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

        // Obtener animales de la base de datos
        $sql = "SELECT * FROM animal";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los resultados
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>ID Animal:</strong> " . $row["id_animal"] . "</p>";
                echo "<p><strong>Nombre:</strong> " . $row["nombre"] . "</p>";
                echo "<p><strong>Raza:</strong> " . $row["raza"] . "</p>";
                echo "<p><strong>Fecha de Nacimiento:</strong> " . $row["fecha_nacimiento"] . "</p>";
                echo "<p><strong>Sexo:</strong> " . $row["sexo"] . "</p>";
                echo "<p><strong>Color:</strong> " . $row["color"] . "</p>";
                echo "<hr>";
            }
        } else {
            echo "<p>No se encontraron animales registrados</p>";
        }

        // Cerrar conexión
        $conn->close();
        ?>

        <br>
        <button onclick="window.location.href = 'index.php';">Volver</button>
    </div>
</body>
</html>
