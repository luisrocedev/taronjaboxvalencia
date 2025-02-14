<?php

/**
 * Archivo: quienes-somos.php
 * Descripción: Muestra la sección "Quiénes Somos" con contenido dinámico cargado desde una API.
 * Funcionalidad:
 * - Presenta el título y el contenido descriptivo de la sección.
 * - Carga dinámicamente los datos a través de `quienes-somos.js`.
 * - Aplica estilos desde `quienes-somos.css`.
 * - Incluye el `header` y el `footer` para mantener una estructura coherente.
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
    <title>Quiénes Somos - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos específica de esta sección -->
    <link rel="stylesheet" href="quienes-somos.css">
</head>

<body>

    <!-- Sección principal para mostrar la información "Quiénes Somos" -->
    <section id="quienes-somos">
        <!-- Título dinámico -->
        <h3></h3>

        <!-- Contenedor donde se cargará la información dinámica -->
        <div id="infoQuienesSomos">
            <!-- Texto cargado dinámicamente -->
            <p></p>
        </div>
    </section>

    <!-- Script que gestiona la carga dinámica del contenido -->
    <script src="quienes-somos.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>