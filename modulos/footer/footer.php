<!--
    Archivo: footer.html
    Descripción: Muestra el pie de página del sitio web, con información de derechos, enlaces a redes sociales y links adicionales.
    Funcionalidad:
    - Muestra el copyright.
    - Incluye enlaces a redes sociales con íconos dinámicos utilizando FontAwesome.
    - Proporciona accesos rápidos a las páginas de política de privacidad, aviso legal y contacto.
    - Aplica estilos desde `footer.css`.
-->

<!-- Estructura del footer -->
<footer>
    <div class="footer-container">

        <!-- Información principal -->
        <div class="footer-info">
            <p>&copy; 2025 TaronjaBox | Todos los derechos reservados</p>
        </div>

        <!-- Redes sociales -->
        <div class="footer-social">
            <!-- Enlace a Instagram -->
            <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- Enlace a Facebook -->
            <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>

            <!-- Enlace a YouTube -->
            <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>

            <!-- Enlace a TikTok -->
            <a href="https://www.tiktok.com/" target="_blank" aria-label="TikTok">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>

        <!-- Enlaces adicionales -->
        <div class="footer-links">
            <a href="politica-privacidad.php">Política de Privacidad</a>
            <a href="aviso-legal.php">Aviso Legal</a>
            <a href="contacto.php">Contáctanos</a>
        </div>
    </div>

    <!-- Enlace a la hoja de estilos específica del footer -->
    <link rel="stylesheet" href="/modulos/footer/footer.css">

    <!-- Cargar FontAwesome para los íconos sociales -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
</footer>