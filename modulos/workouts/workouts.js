/**
 * Archivo: workouts.js
 * Descripción: Carga dinámicamente la información sobre los entrenamientos desde una API y la inserta en el DOM.
 * Funcionalidad:
 * - Realiza una solicitud `fetch` a `api_workouts.php`.
 * - Procesa la respuesta en formato JSON.
 * - Crea dinámicamente elementos para mostrar el título, descripción, duración e imagen de cada entrenamiento.
 * - Muestra un mensaje de error en la consola si falla la carga de datos.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Realizar la solicitud para obtener los datos de los entrenamientos
    fetch("../../backend/api/api_workouts.php")
        .then(response => response.json()) // Convertir la respuesta a formato JSON
        .then(data => {
            // Seleccionar el contenedor donde se insertará la información
            let container = document.querySelector("#infoWorkouts");
            container.innerHTML = ""; // Limpiar contenido anterior

            // Verificar si se recibieron datos
            if (data.length === 0) {
                container.innerHTML = "<p>No hay entrenamientos disponibles en este momento.</p>";
                return;
            }

            // Recorrer los datos y crear los elementos dinámicos
            data.forEach(workout => {
                // Crear un contenedor para cada entrenamiento
                let section = document.createElement("div");
                section.classList.add("workout-item");

                // Rellenar el contenido dinámico del entrenamiento
                section.innerHTML = `
                    <h3>${workout.titulo}</h3> <!-- Título del entrenamiento -->
                    <p>${workout.descripcion}</p> <!-- Descripción del entrenamiento -->
                    <strong>Duración: ${workout.duracion}</strong> <!-- Duración -->
                    <img src="${workout.imagen}" alt="${workout.titulo}"> <!-- Imagen -->
                `;

                // Agregar el contenedor creado al contenedor principal
                container.appendChild(section);
            });
        })
        .catch(error => {
            // Mostrar error en la consola si la carga falla
            console.error("Error al cargar la información:", error);

            // Mostrar un mensaje de error en el contenedor
            const container = document.querySelector("#infoWorkouts");
            container.innerHTML = "<p class='error-text'>Error al cargar los entrenamientos. Por favor, inténtalo más tarde.</p>";
        });
});
