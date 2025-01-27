/*
    Este archivo procesa el poblado de elementos y subelementos en la cabecera de la página.
*/

function procesaCabecera() {
    // Ruta al backend
    const ruta_back = "http://localhost/GitHub/Primero-de-DAM-Luis-Rodriguez/taronjaboxvalencia/004-header%20dinamico/backend/get_header.php";

    // Cargo los menús de la cabecera
    fetch(ruta_back) // Llama al endpoint del backend
        .then(function (response) { // Cuando obtenga respuesta
            return response.json(); // La convierte en JSON
        })
        .then(function (datos) { // Cuando reciba datos
            console.log(datos); // Imprime los datos para depuración
            let cabecera = document.querySelector("header nav ul"); // Selecciona el contenedor del menú
            cabecera.innerHTML = ""; // Vacía el contenido del contenedor para evitar duplicados

            let plantilla = document.querySelector("#elementomenu"); // Selecciona la plantilla (template)

            datos.forEach(function (dato) { // Para cada dato recibido
                let instancia = plantilla.content.cloneNode(true); // Crea una instancia de la plantilla
                let enlace = instancia.querySelector("a"); // Selecciona el enlace dentro de la plantilla

                enlace.textContent = dato.title; // Asigna el texto del enlace
                enlace.setAttribute("href", dato.link); // Asigna la URL del enlace
                enlace.setAttribute("data-id", dato.id); // Agrega un atributo data-id con el ID del enlace

                instancia.querySelector("li").classList.add("categoria"); // Agrega una clase a los elementos del menú

                // Agrega la instancia al menú
                cabecera.appendChild(instancia);
            });
        })
        .catch(function (error) {
            console.warn("Error al cargar los elementos del header:", error); // Imprime errores
            document.querySelector("#contienemodal").style.display = "block"; // Muestra un modal de error (opcional)
        });

    // Gestión del fondo al salir del menú
    let cabecera = document.querySelector("header");
    cabecera.onmouseleave = function () {
        console.log("Has salido del header");
        document.querySelector("main").classList.remove("difuminado"); // Quita la clase CSS
        document.querySelector("header").classList.remove("grande");
        cabecera.style.background = "rgba(255,255,255,1)"; // Restaura el fondo
    };
}

// Llama a la función al cargar la página
procesaCabecera();
