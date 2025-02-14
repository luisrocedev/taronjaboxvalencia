<?php

/**
 * Archivo: header.php
 * Descripción: Genera dinámicamente el encabezado del sitio, incluyendo la navegación, el logo y los estilos correspondientes.
 * Funcionalidad:
 * - Detecta si el archivo actual está en un módulo o en el índice principal.
 * - Carga dinámicamente las rutas correspondientes al logo, estilos y enlaces del menú.
 * - Incluye un menú de navegación dinámico que se gestiona mediante `header.js`.
 */

// Detectar si estamos en un módulo o en el index para ajustar las rutas
$basePath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../header/" : "modulos/header/";
$cssPath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../../public/css/" : "public/css/";
$homePath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../../index.php" : "index.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaronjaBox</title>

    <!-- Estilos globales compartidos en toda la web -->
    <link rel="stylesheet" href="<?php echo $cssPath; ?>global.css">

    <!-- Estilos específicos del header -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>header.css">

    <!-- Fuente moderna para el diseño del sitio -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ========== HEADER MODERNO ========== -->
    <header>
        <nav class="navbar">

            <!-- Logo con redirección dinámica a la página principal -->
            <a href="<?php echo $homePath; ?>" class="logo">
                <img src="<?php echo $basePath; ?>img/favicon.png" alt="TaronjaBox">
            </a>

            <!-- Botón del menú hamburguesa para móviles -->
            <button class="menu-toggle" aria-label="Abrir menú de navegación">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Menú de navegación dinámico -->
            <ul id="menu" class="nav-links">
                <!-- Los enlaces del menú se cargarán dinámicamente mediante el script `header.js` -->
            </ul>
        </nav>
    </header>

    <!-- Incluir el script que carga el menú de navegación dinámico -->
    <script src="<?php echo $basePath; ?>header.js"></script>

</body>

</html>