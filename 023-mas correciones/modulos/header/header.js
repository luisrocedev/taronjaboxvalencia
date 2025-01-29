document.addEventListener("DOMContentLoaded", function () {
    // Detectar la ruta base según la ubicación del archivo
    let basePath = "";
    if (window.location.pathname.includes("modulos")) {
        basePath = "../backend/api/api_header.php";  // Si estamos en un módulo, subimos un nivel
    } else {
        basePath = "backend/api/api_header.php";  // Si estamos en index.php, usamos la ruta directa
    }

    fetch(basePath)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(datos => {
            console.log("Datos recibidos del API Header:", datos); 

            let cabecera = document.querySelector("#menu");
            if (!cabecera) {
                console.error("No se encontró el elemento con id 'menu'.");
                return;
            }

            cabecera.innerHTML = "";  // Limpiar menú antes de agregar enlaces

            datos.forEach(dato => {
                let li = document.createElement("li");
                let enlace = document.createElement("a");
                
                enlace.textContent = dato.nombre;
                enlace.href = dato.enlace;

                li.appendChild(enlace);
                cabecera.appendChild(li);
            });
        })
        .catch(error => console.error("Error al cargar la cabecera:", error));
});
