// Ruta al backend para obtener los destacados
const rutaDestacados = "http://localhost/GitHub/Primero-de-DAM-Luis-Rodriguez/taronjaboxvalencia/005-destacados%20dinamico/modulos/destacados/api_destacados.php?tabla=destacados";

// Función para cargar destacados dinámicamente
function cargarDestacados() {
    fetch(rutaDestacados)
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(datos => {
            console.log(datos); // Verificar los datos en la consola
            const container = document.querySelector(".destacados-container");
            const template = document.querySelector("#destacado-template");

            // Vaciar el contenedor antes de agregar los destacados
            container.innerHTML = "";

            // Generar cada destacado dinámicamente
            datos.forEach(dato => {
                const instancia = template.content.cloneNode(true); // Clonar la plantilla
                instancia.querySelector(".destacado-img").src = dato.imagen; // Imagen
                instancia.querySelector(".destacado-img").alt = dato.titulo; // Texto alternativo
                instancia.querySelector(".destacado-titulo").textContent = dato.titulo; // Título
                instancia.querySelector(".destacado-descripcion").textContent = dato.descripcion; // Descripción
                instancia.querySelector(".destacado-enlace").href = dato.enlace; // Enlace

                // Añadir el destacado al contenedor
                container.appendChild(instancia);
            });
        })
        .catch(error => console.error("Error al cargar los destacados:", error));
}

// Llamar a la función al cargar la página
document.addEventListener("DOMContentLoaded", cargarDestacados);
