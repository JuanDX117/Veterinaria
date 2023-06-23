<!DOCTYPE html>
<html>
<head>
    <title>Consultar Historias Clínicas</title>
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
            width: 600px;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #CCCCCC;
        }

        th {
            background-color: #F5F7F9;
        }

        tr:hover {
            background-color: #F5F7F9;
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
        <h1>Historias Clínicas Registradas</h1>
        <table>
            <tr>
                <th>ID Historia</th>
                <th>Animal</th>
                <th>Médico</th>
                <th>Fecha de Consulta</th>
                <th>Diagnóstico</th>
            </tr>
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

            // Obtener historias clínicas de la base de datos
            $sql = "SELECT historial.id_historial, animal.nombre AS animal_nombre, medico.nombre AS medico_nombre, historial.fecha_consulta, historial.diagnostico
                    FROM historial
                    INNER JOIN animal ON historial.id_animal = animal.id_animal
                    INNER JOIN medico ON historial.id_medico = medico.id_medico";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar los resultados
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id_historial"] . "</td>";
                    echo "<td>" . $row["animal_nombre"] . "</td>";
                    echo "<td>" . $row["medico_nombre"] . "</td>";
                    echo "<td>" . $row["fecha_consulta"] . "</td>";
                    echo "<td>" . $row["diagnostico"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron historias clínicas</td></tr>";
            }

            // Cerrar conexión
            $conn->close();
            ?>
        </table>
        <button onclick="window.location.href = 'index.php';">Volver</button>
    </div>
</body>
</html>
