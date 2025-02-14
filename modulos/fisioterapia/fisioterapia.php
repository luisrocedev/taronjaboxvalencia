<?php

/**
 * Archivo: fisioterapia.php
 * Descripción: Muestra la sección de servicios de fisioterapia, cargando la información dinámicamente desde la base de datos.
 * Funcionalidad: 
 * - Presenta el título y una breve descripción de los servicios de fisioterapia.
 * - Carga el contenido dinámico en el contenedor `#infoFisioterapia`.
 * - Utiliza `fisioterapia.js` para cargar los datos y `fisioterapia.css` para el estilo.
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
    <title>Servicios de Fisioterapia - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos específica de esta sección -->
    <link rel="stylesheet" href="fisioterapia.css">
</head>

<body>

    <!-- Sección de servicios de fisioterapia -->
    <section id="fisioterapia">
        <!-- Título de la sección -->
        <h2 class="titulo-seccion">Servicios de Fisioterapia</h2>

        <!-- Descripción breve -->
        <p class="descripcion-seccion">Ofrecemos tratamientos personalizados para tu bienestar y recuperación.</p>

        <!-- Contenedor donde se cargará la información dinámica -->
        <div id="infoFisioterapia" class="fisioterapia-container">
            <!-- Mensaje inicial mientras se cargan los datos -->
            <p class="loading-text">Cargando información...</p>
        </div>
    </section>

    <!-- Script para cargar el contenido dinámico de fisioterapia -->
    <script src="fisioterapia.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>