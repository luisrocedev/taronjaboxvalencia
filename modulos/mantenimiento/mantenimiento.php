<!--
    Archivo: mantenimiento.html
    Descripción: Muestra un mensaje de mantenimiento para indicar que la web no está disponible temporalmente.
    Funcionalidad:
    - Presenta un mensaje claro de mantenimiento con un icono de advertencia.
    - Aplica estilos desde el archivo `mantenimiento.css`.
    - Permite incluir lógica adicional si es necesario mediante el bloque de `script`.
-->

<!-- Contenedor principal del mensaje de mantenimiento -->
<div id="contenido_mantenimiento">
    <div id="mantenimiento">
        <!-- Icono de advertencia -->
        <span>⚠️</span>

        <!-- Mensaje informativo para el usuario -->
        <p>Web en mantenimiento - Estaremos contigo de nuevo en breve</p>
    </div>
</div>

<!-- Bloque de script para posibles funciones adicionales (vacío por ahora) -->
<script>
    // Aquí se podrían agregar funciones para redireccionar o gestionar el mantenimiento
</script>

<!-- Incluir los estilos desde el archivo PHP que referencia a mantenimiento.css -->
<style>
    <?php include "mantenimiento.css" ?>
</style>