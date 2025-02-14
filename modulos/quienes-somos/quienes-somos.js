/**
 * Archivo: quienes-somos.js
 * Descripción: Carga dinámicamente el contenido de la sección "Quiénes Somos" desde una API y lo inserta en el DOM.
 * Funcionalidad:
 * - Realiza una solicitud `fetch` a `api_quienes_somos.php`.
 * - Procesa la respuesta en formato JSON.
 * - Actualiza el título, imagen y contenido de la sección.
 * - Muestra un mensaje de error en consola si falla la carga de datos.
 */

document.addEventListener("DOMContentLoaded", () => {
    // Realizar la solicitud para obtener los datos de la sección "Quiénes Somos"
    fetch("../../backend/api/api_quienes_somos.php")
        .then((response) => response.json()) // Convertir la respuesta a JSON
        .then((data) => {
            // Seleccionar los elementos relevantes en el DOM
            const titleEl = document.querySelector("#quienes-somos h3");
            const container = document.querySelector("#infoQuienesSomos");

            // Limpiar contenido anterior
            container.innerHTML = "";

            // Verificar si se recibieron datos válidos
            if (data.length > 0) {
                const info = data[0]; // Usar el primer objeto del array como contenido principal

                // Actualizar el título de la sección
                titleEl.textContent = info.title;

                // Crear y agregar la imagen
                const img = document.createElement("img");
                img.src = info.imagen;
                img.alt = info.title;

                // Crear y agregar el texto descriptivo
                const text = document.createElement("p");
                text.textContent = info.content;

                // Insertar la imagen y el texto en el contenedor
                container.appendChild(img);
                container.appendChild(text);
            } else {
                // Mostrar mensaje si no hay datos disponibles
                container.innerHTML = "<p>No hay información disponible en este momento.</p>";
            }
        })
        .catch((error) => {
            // Mostrar error en la consola si ocurre un fallo en la carga
            console.error("Error al cargar la información:", error);

            // Mostrar mensaje en el contenedor para informar al usuario
            const container = document.querySelector("#infoQuienesSomos");
            container.innerHTML = "<p class='error-text'>Error al cargar la información. Por favor, inténtalo más tarde.</p>";
        });
});
