/**
 * Archivo: nuestro-equipo.js
 * Descripción: Carga dinámicamente la información de los miembros del equipo desde una API y la muestra en el DOM.
 * Funcionalidad:
 * - Realiza una solicitud `fetch` a `api_nuestro_equipo.php`.
 * - Procesa la respuesta en formato JSON.
 * - Crea dinámicamente los elementos para mostrar el nombre, cargo, descripción e imagen de cada miembro.
 * - Muestra un mensaje de error en consola si falla la carga de datos.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Realizar la solicitud para obtener los datos del equipo
    fetch("../../backend/api/api_nuestro_equipo.php")
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            // Seleccionar el contenedor donde se insertará la información
            let container = document.querySelector("#infoEquipo");
            container.innerHTML = ""; // Limpiar contenido anterior

            // Recorrer los datos recibidos y crear los elementos dinámicamente
            data.forEach(miembro => {
                // Crear un contenedor para cada miembro del equipo
                let section = document.createElement("div");
                section.classList.add("equipo-item");

                // Rellenar el contenedor con la información del miembro
                section.innerHTML = `
                    <h3>${miembro.nombre}</h3> 
                    <h4>${miembro.cargo}</h4>   
                    <p>${miembro.descripcion}</p> 
                    <img src="${miembro.imagen}" alt="${miembro.nombre}"> 
                `;

                // Agregar el contenedor al contenedor principal
                container.appendChild(section);
            });
        })
        .catch(error => {
            // Mostrar error en la consola si falla la carga
            console.error("Error al cargar la información:", error);
        });
});
