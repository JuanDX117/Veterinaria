<!DOCTYPE html>
<html>
<head>
    <title>Veterinaria - Registrar Animal</title>
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

        input[type="text"],
        input[type="date"] {
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
        <h1>Veterinaria - Registrar Animal</h1>

        <form action="guardar_animal.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="raza">Raza:</label>
            <input type="text" id="raza" name="raza" required><br>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="sexo" required><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required><br>

            <input type="submit" value="Guardar">
        </form>

        <button onclick="window.location.href = 'index.php';">Volver</button>
    </div>
</body>
</html>
