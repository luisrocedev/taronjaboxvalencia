/**
 * Archivo: fisioterapia.js
 * Descripción: Carga dinámicamente los servicios de fisioterapia desde una API y los muestra en la sección correspondiente.
 * Funcionalidad:
 * - Realiza una solicitud `fetch` a la API `api_fisioterapia.php`.
 * - Procesa la respuesta en formato JSON y genera dinámicamente los elementos del DOM.
 * - Muestra el nombre, descripción y costo de cada servicio.
 * - Muestra mensajes de error en la consola si ocurre un fallo.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Realizar una solicitud para obtener los datos de fisioterapia
    fetch("../../backend/api/api_fisioterapia.php")
        .then(response => response.json()) // Convertir la respuesta a formato JSON
        .then(data => {
            // Mostrar los datos recibidos en la consola para depuración
            console.log("Datos recibidos:", data);

            // Seleccionar el contenedor donde se mostrará la información
            let container = document.querySelector("#infoFisioterapia");
            container.innerHTML = ""; // Limpiar el contenido anterior

            // Recorrer el array de servicios de fisioterapia
            data.forEach(servicio => {
                // Crear un nuevo elemento para cada servicio
                let section = document.createElement("div");
                section.classList.add("fisioterapia-item");

                // Agregar el contenido dinámico al elemento
                section.innerHTML = `
                    <h3>${servicio.nombre}</h3>
                    <p>${servicio.descripcion}</p>
                    <div class="costo">Costo: ${servicio.costo} €</div>
                `;

                // Insertar el elemento creado en el contenedor principal
                container.appendChild(section);
            });
        })
        .catch(error => {
            // Mostrar el mensaje de error en la consola si falla la carga
            console.error("Error al cargar la información:", error);
        });
});
