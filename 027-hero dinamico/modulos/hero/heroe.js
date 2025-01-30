document.addEventListener("DOMContentLoaded", () => {
    const heroSection = document.getElementById("hero");
    const seccion = heroSection.dataset.seccion; // Obtener la sección desde el atributo data

    fetch(`/backend/api/api_hero.php?seccion=${seccion}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error("Error:", data.error);
                return;
            }

            // Construir el Hero dinámicamente
            heroSection.style.backgroundImage = `url('${data.imagen_fondo}')`;
            heroSection.innerHTML = `
                <div class="overlay"></div>
                <div class="hero-content">
                    <h1>${data.titulo}</h1>
                    <p>${data.subtitulo}</p>
                    ${data.texto_boton && data.enlace_boton 
                        ? `<a href="${data.enlace_boton}" class="btn">${data.texto_boton}</a>` 
                        : ""}
                </div>
            `;
        })
        .catch(error => console.error("Error al obtener el Hero:", error));
});
