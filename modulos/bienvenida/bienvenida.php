<?php
// Ruta dinámica de la imagen
$backgroundImage = 'modulos/bienvenida/img/fondo.jpg';
?>

<section id="bienvenida" style="background-image: url('<?php echo $backgroundImage; ?>');">
    <div class="overlay">
        <h1 class="hero-title">Bienvenidos a <span>TaronjaBox</span></h1>
        <p class="hero-subtitle">Tu lugar de CrossFit en Valencia, donde la fuerza y la pasión se fusionan.</p>
        <a href="modulos/quienes-somos/quienes-somos.php" class="btn">Descúbrenos</a>
    </div>
</section>

<link rel="stylesheet" href="modulos/bienvenida/bienvenida.css">