<?php
// Incluir el header
include 'modulos/header/header.php';
?>

<main>
    <!-- Contenido principal -->

    <!-- Sección de destacados -->
    <?php include 'modulos/destacados/destacados.php'; ?>

    <!-- Sección de entradas de blog -->
    <h2>Entradas de Blog</h2>
    <div id="blog-posts"></div> <!-- Contenedor donde se mostrarán las entradas del blog -->
</main>

<?php
// Incluir el footer
include 'modulos/footer/footer.php';
?>

<!-- Vincular scripts y estilos -->
<script src="modulos/header/header.js" defer></script>


<script src="modulos/destacados/destacados.js" defer></script>
<link rel="stylesheet" href="modulos/destacados/destacados.css">