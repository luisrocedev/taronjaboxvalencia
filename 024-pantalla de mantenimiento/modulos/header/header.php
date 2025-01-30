<?php
// Detectar si estamos en un módulo o en el index
$basePath = (strpos($_SERVER['SCRIPT_NAME'], "/modulos/") !== false) ? "../header/" : "modulos/header/";
?>
<header>
    <nav>
        <ul id="menu">
            <!-- Los enlaces del menú se cargarán dinámicamente desde header.js -->
        </ul>
    </nav>
</header>

<!-- Incluir `header.js` y `header.css` dinámicamente -->
<script>
    <?php include $basePath . "header.js"; ?>
</script>
<style>
    <?php include $basePath . "header.css"; ?>
</style>