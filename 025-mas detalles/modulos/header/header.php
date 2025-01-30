<?php
// Detectar si estamos en un módulo o en el index
$basePath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../header/" : "modulos/header/";
$cssPath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../../public/css/" : "public/css/";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaronjaBox</title>

    <!-- Estilos globales -->
    <link rel="stylesheet" href="<?php echo $cssPath; ?>global.css">

    <!-- Estilos específicos del header -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>header.css">
</head>

<body>

    <header>
        <nav>
            <ul id="menu">
                <!-- Los enlaces del menú se cargarán dinámicamente desde header.js -->
            </ul>
        </nav>
    </header>

    <!-- Incluir `header.js` dinámicamente -->
    <script src="<?php echo $basePath; ?>header.js"></script>

</body>

</html>