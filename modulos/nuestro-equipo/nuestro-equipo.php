<?php

/**
 * Archivo: nuestro-equipo.php
 * Descripción: Muestra la sección de "Nuestro Equipo" con contenido dinámico cargado desde la base de datos.
 * Funcionalidad:
 * - Presenta un título descriptivo de la sección.
 * - Carga la información del equipo dinámicamente en el contenedor `#infoEquipo`.
 * - Aplica estilos mediante `nuestro-equipo.css`.
 * - Incluye el `header` y el `footer` para mantener una estructura consistente.
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
    <title>Nuestro Equipo - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos específica de esta sección -->
    <link rel="stylesheet" href="nuestro-equipo.css">
</head>

<body>

    <!-- Sección principal para mostrar al equipo -->
    <section id="nuestro-equipo">
        <!-- Título de la sección -->
        <h2>Nuestro Equipo</h2>

        <!-- Contenedor donde se cargará la información del equipo -->
        <div id="infoEquipo">
            <!-- Mensaje inicial mientras se cargan los datos -->
            <p>Cargando información...</p>
        </div>
    </section>

    <!-- Script para cargar dinámicamente la información del equipo -->
    <script src="nuestro-equipo.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>