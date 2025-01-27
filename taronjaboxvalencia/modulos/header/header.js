// Ruta al backend para obtener el header
const rutaHeader = "http://localhost/GitHub/Primero-de-DAM-Luis-Rodriguez/taronjaboxvalencia/005-destacados%20dinamico/modulos/header/api_header.php?tabla=header";

// Función para cargar el header dinámicamente
function cargarHeader() {
    fetch(rutaHeader)
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(datos => {
            console.log(datos); // Verificar los datos en consola
            const navContainer = document.querySelector("header nav ul");

            // Vaciar el contenedor antes de agregar los elementos
            navContainer.innerHTML = "";

            // Generar cada elemento del header dinámicamente
            datos.forEach(dato => {
                const li = document.createElement("li");
                const a = document.createElement("a");

                a.textContent = dato.title; // Texto del enlace
                a.href = dato.link; // URL del enlace

                li.appendChild(a); // Agregar el enlace al elemento <li>
                navContainer.appendChild(li); // Agregar el <li> al contenedor del nav
            });
        })
        .catch(error => console.error("Error al cargar el header:", error));
}

// Llamar a la función al cargar la página
document.addEventListener("DOMContentLoaded", cargarHeader);
