<?php

/**
 * Archivo: post.php
 * Descripción: Muestra el contenido completo de una publicación del blog, cargando los datos dinámicamente desde la API.
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
    <title>Post - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos del post -->
    <link rel="stylesheet" href="post.css">
</head>

<body>

    <!-- Sección principal para mostrar el post -->
    <section id="post">
        <div class="post-container">
            <!-- Título dinámico del post -->
            <h2 id="post-title">Cargando post...</h2>

            <!-- Imagen del post (oculta inicialmente hasta que se carguen los datos) -->
            <img id="post-image" src="" alt="Imagen del post" class="hidden">

            <!-- Contenido del post cargado dinámicamente -->
            <p id="post-content"></p>

            <!-- Fecha de publicación -->
            <small id="post-date"></small>
        </div>
    </section>

    <!-- Script que carga dinámicamente el contenido del post -->
    <script src="post.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>