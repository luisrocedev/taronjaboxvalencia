/**
 * Archivo: destacados.js
 * Descripción: Carga dinámicamente el contenido destacado desde la API y lo inserta en la sección correspondiente.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Detectar ruta base para determinar la URL correcta de la API
    const currentPath = window.location.pathname;
    const basePath = currentPath.includes("/modulos/")
        ? "../../backend/api/api_destacados.php"
        : "backend/api/api_destacados.php";

    console.log("Cargando destacados desde:", basePath); // Depuración para verificar la ruta usada

    // Realizar una solicitud para cargar los destacados
    fetch(basePath)
        .then(response => {
            // Verificar si la respuesta es exitosa
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            return response.json(); // Convertir la respuesta a formato JSON
        })
        .then(data => {
            // Seleccionar el contenedor donde se mostrará el contenido
            const container = document.querySelector("#infoDestacado");
            container.innerHTML = ""; // Limpiar contenido anterior

            // Mostrar un mensaje si no hay destacados disponibles
            if (data.length === 0) {
                container.innerHTML = "<p class='loading-text'>No hay destacados disponibles.</p>";
                return;
            }

            // Recorrer el array de destacados y crear dinámicamente los elementos
            data.forEach(destacado => {
                const item = document.createElement("div");
                item.classList.add("destacado-item");

                // Generar el contenido interno de cada elemento destacado
                item.innerHTML = `
                    <img src="${destacado.imagen}" alt="${destacado.titulo}">
                    <h3>${destacado.titulo}</h3>
                    <p>${destacado.descripcion}</p>
                    <a href="${destacado.enlace}" target="_blank" rel="noopener noreferrer">Ver más</a>
                `;

                // Agregar el elemento al contenedor principal
                container.appendChild(item);
            });
        })
        .catch(error => {
            // Manejo de errores en caso de fallo al cargar los destacados
            console.error("Error al cargar el contenido destacado:", error);
            document.querySelector("#infoDestacado").innerHTML = "<p class='loading-text'>Error al cargar destacados.</p>";
        });
});
