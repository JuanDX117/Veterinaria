<!DOCTYPE html>
<html>
<head>
    <title>Veterinaria - Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body.index {
            background-image: url(img/fondo.jpg);
            background-size: cover;
            background-position: center;
        }
        
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        
        .box-container {
            width: 300px;
            background-color: #34495e;
            color: #fff;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
        }
        
        .box-container ul {
            list-style-type: none;
            padding: 0;
        }
        
        .box-container h2 {
            margin: 0;
            color: #add8e6;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            font-size: 18px;
        }
        
        .box-container p {
            color: #add8e6;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            font-size: 14px;
        }
        
        .box-container li {
            margin-bottom: 10px;
        }
        
        .box-container a.btn {
            display: block;
            padding: 10px 20px;
            background-color: #add8e6;
            color: #333;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .box-container a.btn:hover {
            background-color: #87ceeb;
        }
        
        .background-image {
            background-image: url(img/fondo.jpg);
            background-size: cover;
            position: fixed;
            inset-block-start: 0;
            inset-inline-start: 0;
            inline-size: 100%;
            block-size: 100%;
            z-index: -1;
        }
    </style>
</head>
<body class="index">
    
<div class="content">
    <div class="box-container">
        <h2>Bienvenido a nuestra Veterinaria</h2>
    </div>
    <div class="box-container">
        <h2>Registros</h2>
        <ul>
            <li><a href="registrar_medico.php" class="btn">Registrar Médicos</a></li>
            <li><a href="registrar_cliente.php" class="btn">Registrar Clientes</a></li>
            <li><a href="registrar_animal.php" class="btn">Registrar Animales</a></li>
            <li><a href="registrar_historia.php" class="btn">Registrar Historia del Paciente</a></li>
        </ul>
    </div>
    <div class="box-container">
        <h2>Consultas</h2>
        <ul>
            <li><a href="consultar_historia.php" class="btn">Consultar Historia</a></li>
            <li><a href="consultar_clientes.php" class="btn">Consultar Clientes</a></li>
            <li><a href="consultar_medicos.php" class="btn">Consultar Médicos</a></li>
            <li><a href="consultar_animal.php" class="btn">Consultar Animales</a></li>
        </ul>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
