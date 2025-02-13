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

    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ========== HEADER MODERNO 2025 ========== -->
    <header>
        <nav>
            <!-- Logo -->
            <div class="logo">TaronjaBox</div>

            <!-- Botón del menú hamburguesa (móvil) -->
            <button class="menu-toggle" aria-label="Abrir menú de navegación">☰</button>

            <!-- Menú de navegación -->
            <ul id="menu">
                <!-- Los enlaces del menú se cargarán dinámicamente desde `header.js` -->
            </ul>
        </nav>
    </header>

    <!-- Incluir el script dinámico del header -->
    <script src="<?php echo $basePath; ?>header.js"></script>

</body>

</html>