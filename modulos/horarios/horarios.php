<?php

/**
 * Archivo: horarios.php
 * Descripción: Muestra una sección con los horarios de clases en formato de imagen.
 * Funcionalidad:
 * - Presenta un título descriptivo.
 * - Muestra una imagen con los horarios de las clases.
 * - Aplica estilos desde `horarios.css`.
 * - Incluye el `header` y el `footer` del sitio para mantener la estructura uniforme.
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
    <title>Horarios - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos específica de esta sección -->
    <link rel="stylesheet" href="horarios.css">
</head>

<body>

    <!-- Sección principal para mostrar los horarios -->
    <section id="horarios">
        <!-- Título de la sección -->
        <h2>Horarios</h2>

        <!-- Contenedor que muestra la imagen de horarios -->
        <div class="horarios-container">
            <!-- Imagen que representa los horarios de clases -->
            <img src="img/horario.jpg" alt="Horarios de Clases">
        </div>
    </section>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>