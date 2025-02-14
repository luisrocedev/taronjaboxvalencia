<!--
    Archivo: destacados.html
    Descripción: Muestra la sección de destacados con contenido cargado dinámicamente desde la base de datos.
    Funcionalidad: 
    - Presenta un título y una breve introducción a la sección de destacados.
    - Carga dinámicamente el contenido en el contenedor `#infoDestacado` utilizando `destacados.js`.
    - Usa `destacados.css` para aplicar el estilo correspondiente.
-->
<!-- Sección de destacados -->
<section id="destacado">
    <!-- Título principal de la sección -->
    <h2 class="titulo-seccion">Destacados</h2>

    <!-- Contenedor donde se insertará el contenido dinámico -->
    <div id="infoDestacado" class="destacado-container">
        <!-- Mensaje inicial mientras se carga el contenido -->
        <p class="loading-text">Cargando contenido...</p>
    </div>
</section>

<!-- Script que gestiona la carga dinámica del contenido destacado -->
<script src="modulos/destacados/destacados.js"></script>

<!-- Enlace a la hoja de estilos específica de la sección de destacados -->
<link rel="stylesheet" href="modulos/destacados/destacados.css">