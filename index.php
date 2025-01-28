<?php
// Definir la ruta base del proyecto
define('BASE_PATH', __DIR__ . '/008-correcciones');

// Incluir el header
include BASE_PATH . '/modulos/header/header.php';
?>

<main>
    <h1>Bienvenido al Proyecto</h1>
    <p>Este es el índice principal del proyecto. A continuación, se muestran los destacados:</p>

    <!-- Incluir el módulo de destacados -->
    <?php include BASE_PATH . '/modulos/destacados/destacados.php'; ?>
</main>

<?php
// Incluir el footer
include BASE_PATH . '/modulos/footer/footer.php';
?>