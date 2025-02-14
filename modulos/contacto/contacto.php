<?php

/**
 * Archivo: contacto.php
 * Descripción: Muestra un formulario de contacto para que los usuarios envíen sus mensajes, los cuales se procesarán dinámicamente a través de la API.
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
    <title>Contacto - TaronjaBox</title>

    <!-- Enlace a la hoja de estilos del formulario de contacto -->
    <link rel="stylesheet" href="contacto.css">
</head>

<body>

    <!-- Sección principal del formulario de contacto -->
    <section id="contacto">
        <div class="container">
            <!-- Título y descripción de la sección -->
            <h2>Contacto</h2>
            <p>¿Tienes dudas? Escríbenos y te responderemos lo antes posible.</p>

            <!-- Formulario de contacto -->
            <form id="formContacto">
                <!-- Campo para el nombre -->
                <div class="input-group">
                    <input type="text" name="nombre" placeholder="Tu Nombre" required>
                </div>

                <!-- Campo para el email -->
                <div class="input-group">
                    <input type="email" name="email" placeholder="Tu Email" required>
                </div>

                <!-- Campo para el mensaje -->
                <div class="input-group">
                    <textarea name="mensaje" placeholder="Tu Mensaje" required></textarea>
                </div>

                <!-- Botón para enviar el formulario -->
                <button type="submit" class="btn">Enviar</button>
            </form>

            <!-- Mensaje de respuesta después de enviar el formulario -->
            <p id="respuesta"></p>
        </div>
    </section>

    <!-- Script que gestiona el envío del formulario -->
    <script src="contacto.js"></script>

    <!-- Incluir el footer del sitio -->
    <?php include("../footer/footer.php"); ?>

</body>

</html>