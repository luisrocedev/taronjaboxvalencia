<?php

/**
 * Archivo: workouts.php
 * Descripción: Muestra la sección "Entrenamientos" con información dinámica sobre los diferentes tipos de entrenamientos ofrecidos.
 * Funcionalidad:
 * - Presenta el título y el contenido descriptivo de la sección.
 * - Carga dinámicamente los datos desde la API usando `workouts.js`.
 * - Aplica estilos mediante `workouts.css`.
 * - Incluye el `header` y el `footer` para mantener la estructura consistente del sitio.
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
    <title>Entrenamientos - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos específica de esta sección -->
    <link rel="stylesheet" href="workouts.css">
</head>

<body>

    <!-- Sección principal para mostrar la información de los entrenamientos -->
    <section id="workouts">
        <!-- Título de la sección -->
        <h2>Entrenamientos</h2>

        <!-- Contenedor donde se cargará la información dinámica -->
        <div id="infoWorkouts">
            <!-- Mensaje de carga mientras se obtienen los datos -->
            <p>Cargando información...</p>
        </div>
    </section>

    <!-- Script que gestiona la carga dinámica del contenido -->
    <script src="workouts.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>