<?php

/**
 * Archivo: bienvenida.php
 * Descripción: Muestra una sección de bienvenida con una imagen de fondo dinámica, un mensaje principal y un botón para descubrir más información.
 */

// Ruta dinámica de la imagen de fondo
$backgroundImage = 'modulos/bienvenida/img/fondo.jpg';
?>

<!-- Sección de bienvenida con imagen de fondo -->
<section id="bienvenida" style="background-image: url('<?php echo $backgroundImage; ?>');">
    <div class="overlay">
        <!-- Título principal de la sección -->
        <h1 class="hero-title">Bienvenidos a <span>TaronjaBox</span></h1>

        <!-- Subtítulo descriptivo -->
        <p class="hero-subtitle">Tu lugar de CrossFit en Valencia, donde la fuerza y la pasión se fusionan.</p>

        <!-- Botón que redirige a la sección "Quiénes somos" -->
        <a href="modulos/quienes-somos/quienes-somos.php" class="btn">Descúbrenos</a>
    </div>
</section>

<!-- Enlace al archivo CSS de la sección de bienvenida -->
<link rel="stylesheet" href="modulos/bienvenida/bienvenida.css">