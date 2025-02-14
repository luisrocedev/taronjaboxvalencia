<?php

/**
 * Archivo: blog.php
 * Descripción: Muestra la sección del blog con las últimas publicaciones cargadas dinámicamente.
 */

// Incluir el header del sitio
include("../header/header.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos del blog -->
    <link rel="stylesheet" href="blog.css">
</head>

<body>

    <!-- Sección principal del blog -->
    <section id="blog">
        <div class="blog-header">
            <!-- Título y subtítulo del blog -->
            <h2>Nuestro Blog</h2>
            <p>Explora las últimas publicaciones y novedades</p>
        </div>

        <!-- Contenedor dinámico para las publicaciones del blog -->
        <div class="blog-container" id="blog-container">
            <p class="loading-text">Cargando publicaciones...</p>
            <!-- Las publicaciones se cargarán aquí mediante JavaScript -->
        </div>
    </section>

    <!-- Script que gestiona la carga dinámica de las publicaciones -->
    <script src="blog.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>