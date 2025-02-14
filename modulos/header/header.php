<?php
// Detectar si estamos en un módulo o en el index
$basePath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../header/" : "modulos/header/";
$cssPath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../../public/css/" : "public/css/";
$homePath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../../index.php" : "index.php";
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

    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ========== HEADER MODERNO ========== -->
    <header>
        <nav class="navbar">
            <!-- Logo con redirección corregida -->
            <a href="<?php echo $homePath; ?>" class="logo">
                <img src="<?php echo $basePath; ?>img/favicon.png" alt="TaronjaBox">
            </a>

            <!-- Botón del menú hamburguesa (móvil) -->
            <button class="menu-toggle" aria-label="Abrir menú de navegación">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Menú de navegación dinámico -->
            <ul id="menu" class="nav-links">
                <!-- Los enlaces del menú se cargarán dinámicamente desde `header.js` -->
            </ul>
        </nav>
    </header>

    <!-- Incluir el script dinámico del header -->
    <script src="<?php echo $basePath; ?>header.js"></script>

</body>

</html>