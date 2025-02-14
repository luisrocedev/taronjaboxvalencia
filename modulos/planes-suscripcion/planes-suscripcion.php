<?php

/**
 * Archivo: planes-suscripcion.php
 * Descripción: Muestra la sección de planes de suscripción, cargando el contenido de manera dinámica desde una API.
 * Funcionalidad:
 * - Presenta un título y un contenedor para los planes de suscripción.
 * - Carga la información de los planes dinámicamente mediante `planes-suscripcion.js`.
 * - Aplica estilos específicos desde `planes-suscripcion.css`.
 * - Incluye el `header` y el `footer` para mantener la coherencia del sitio.
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
    <title>Planes de Suscripción - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos específica de esta sección -->
    <link rel="stylesheet" href="planes-suscripcion.css">
</head>

<body>

    <!-- Sección principal para mostrar los planes de suscripción -->
    <section id="planes-suscripcion">
        <!-- Título de la sección -->
        <h2>Planes de Suscripción</h2>

        <!-- Contenedor donde se cargará la información dinámica -->
        <div id="infoPlanes">
            <!-- Mensaje inicial mientras se cargan los datos -->
            <p>Cargando información...</p>
        </div>
    </section>

    <!-- Script que gestiona la carga dinámica de los planes -->
    <script src="planes-suscripcion.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>