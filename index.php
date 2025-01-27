<?php
// Definir la ruta base del proyecto
$baseURL = '/taronjaboxvalencia'; // Cambia esto si tu proyecto está en un subdirectorio en el servidor

// Incluir el header
include __DIR__ . '/taronjaboxvalencia/modulos/header/header.php';
?>

<main>
    <!-- Contenido principal -->

    <!-- Sección de destacados -->
    <?php include __DIR__ . '/taronjaboxvalencia/modulos/destacados/destacados.php'; ?>

    <!-- Sección de entradas de blog -->
    <h2>Entradas de Blog</h2>
    <div id="blog-posts"></div> <!-- Contenedor donde se mostrarán las entradas del blog -->
</main>

<?php
// Incluir el footer
include __DIR__ . '/taronjaboxvalencia/modulos/footer/footer.php';
?>

<!-- Vincular scripts y estilos -->
<script src="<?php echo $baseURL; ?>taronjaboxvalencia/modulos/header/header.js" defer></script>
<script src="<?php echo $baseURL; ?>taronjaboxvalencia/modulos/destacados/destacados.js" defer></script>
<link rel="stylesheet" href="<?php echo $baseURL; ?>taronjaboxvalencia/modulos/destacados/destacados.css">