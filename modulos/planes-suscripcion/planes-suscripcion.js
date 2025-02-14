/**
 * Archivo: planes-suscripcion.js
 * Descripción: Carga dinámicamente los planes de suscripción desde una API y los muestra en el DOM.
 * Funcionalidad:
 * - Realiza una solicitud `fetch` a `api_planes_suscripcion.php`.
 * - Procesa la respuesta en formato JSON.
 * - Crea dinámicamente los elementos para mostrar el nombre, beneficios, precio y duración de cada plan.
 * - Muestra un mensaje de error en consola si falla la carga de datos.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Realizar la solicitud para obtener los datos de los planes de suscripción
    fetch("../../backend/api/api_planes_suscripcion.php")
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            // Seleccionar el contenedor donde se insertará la información
            let container = document.querySelector("#infoPlanes");
            container.innerHTML = ""; // Limpiar contenido anterior

            // Verificar si se recibieron datos
            if (data.length === 0) {
                container.innerHTML = "<p>No hay planes disponibles en este momento.</p>";
                return;
            }

            // Recorrer los datos recibidos y crear los elementos dinámicamente
            data.forEach(plan => {
                // Crear un nuevo elemento para cada plan
                let section = document.createElement("div");
                section.classList.add("plan-item");

                // Rellenar el contenedor con la información del plan
                section.innerHTML = `
                    <h3>${plan.nombre}</h3> 
                    <p>${plan.beneficios}</p> 
                    <strong>Precio: ${plan.precio} €</strong> 
                    <span>Duración: ${plan.duracion}</span> 
                `;

                // Agregar el contenedor al contenedor principal
                container.appendChild(section);
            });
        })
        .catch(error => {
            // Mostrar error en la consola si falla la carga
            console.error("Error al cargar la información:", error);
            // Mostrar un mensaje en el contenedor
            const container = document.querySelector("#infoPlanes");
            container.innerHTML = "<p class='error-text'>Error al cargar los planes de suscripción. Por favor, inténtalo más tarde.</p>";
        });
});
