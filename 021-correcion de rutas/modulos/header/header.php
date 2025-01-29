<?php
// Obtener la ruta base del proyecto dinámicamente
$basePath = dirname($_SERVER['SCRIPT_NAME'], 1);
?>
<header>
    <nav id="menu">
        <!-- Los enlaces se cargarán dinámicamente desde header.js -->
    </nav>
</header>

<link rel="stylesheet" href="<?php echo $basePath; ?>/modulos/header/header.css">
<script src="<?php echo $basePath; ?>/modulos/header/header.js"></script>