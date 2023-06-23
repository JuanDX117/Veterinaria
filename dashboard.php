<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div class="logo">
                <img src="logo.png" alt="Logo de la veterinaria">
            </div>
            <ul class="menu">
                <li><a href="index.php">Dashboard</a></li>
                <li>
                    <a href="#" class="submenu-toggle">Registrar</a>
                    <ul class="submenu">
                        <li><a href="registrar_medico.php">Registrar Médicos</a></li>
                        <li><a href="registrar_cliente.php">Registrar Clientes</a></li>
                        <li><a href="registrar_animal.php">Registrar Animales</a></li>
                        <li><a href="registrar_historia.php">Registrar Historia del Paciente</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="submenu-toggle">Consultar</a>
                    <ul class="submenu">
                        <li><a href="consultar_historia.php">Consultar Historia</a></li>
                        <li><a href="consultar_clientes.php">Consultar Clientes</a></li>
                        <li><a href="consultar_medicos.php">Consultar Médicos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <!-- Aquí se mostrará el contenido de cada sección -->
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
