document.addEventListener("DOMContentLoaded", function () {
    // Obtener la ruta base detectando la carpeta en la que estamos trabajando
    let basePath = "";
    let currentPath = window.location.pathname;

    if (currentPath.includes("/modulos/")) {
        basePath = "../../backend/api/api_header.php";  // Si estamos en un módulo, subimos dos niveles
    } else {
        basePath = "backend/api/api_header.php";  // Si estamos en index.php, usamos la ruta directa
    }

    console.log("Cargando header desde:", basePath);  // Debug para verificar la ruta

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
