<!--
    Archivo: servicios.html
    Descripción: Sección que muestra los servicios principales ofrecidos por TaronjaBox.
    Funcionalidad:
    - Presenta los servicios en un formato de cuadrícula (`grid`).
    - Cada servicio incluye una imagen, título, descripción y un enlace para más información.
    - Aplica estilos desde `servicios.css`.
-->

<!-- Sección de servicios -->
<section id="servicios">
    <!-- Título principal de la sección -->
    <h2 class="titulo-seccion">Nuestros Servicios</h2>

    <!-- Contenedor de servicios organizado en formato de cuadrícula -->
    <div class="servicios-grid">

        <!-- Servicio: Entrenamiento -->
        <div class="servicio">
            <!-- Imagen representativa del servicio -->
            <img src="modulos/workouts/img/train.jpg" alt="Entrenamiento">

            <!-- Información sobre el servicio -->
            <div class="servicio-info">
                <h3>Entrenamiento</h3>
                <p>Programas de entrenamiento personalizados para todos los niveles.</p>

                <!-- Botón para ver más información -->
                <a href="modulos/workouts/workouts.php" class="btn">Ver más</a>
            </div>
        </div>

        <!-- Servicio: Fisioterapia -->
        <div class="servicio">
            <!-- Imagen representativa del servicio -->
            <img src="modulos/fisioterapia/img/fisioterapia.jpg" alt="Fisioterapia">

            <!-- Información sobre el servicio -->
            <div class="servicio-info">
                <h3>Fisioterapia</h3>
                <p>Recuperación, prevención y tratamiento de lesiones para tu bienestar.</p>

                <!-- Botón para ver más información -->
                <a href="modulos/fisioterapia/fisioterapia.php" class="btn">Ver más</a>
            </div>
        </div>

    </div>
</section>

<!-- Enlace a la hoja de estilos específica de esta sección -->
<link rel="stylesheet" href="modulos/servicios/servicios.css">