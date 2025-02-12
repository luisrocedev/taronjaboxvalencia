document.addEventListener("DOMContentLoaded", function () {
    // Detectar en qué carpeta estamos para ajustar la ruta de la API
    let basePath = "";
    let currentPath = window.location.pathname;

    if (currentPath.includes("/modulos/")) {
        basePath = "../../backend/api/api_header.php";  // Si estamos en un módulo, subimos dos niveles
    } else {
        basePath = "backend/api/api_header.php";  // Si estamos en index.php, usamos la ruta directa
    }

    console.log("Cargando header desde:", basePath);  // Debug

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

            cabecera.innerHTML = "";  // Limpiar el menú antes de agregar enlaces

            datos.forEach(dato => {
                let li = document.createElement("li");
                let enlace = document.createElement("a");

                // Verificar si el enlace es absoluto (contiene "http")
                if (dato.enlace.startsWith("http")) {
                    enlace.href = dato.enlace;  // URL externa, usar tal cual
                } else {
                    enlace.href = basePath.replace("backend/api/api_header.php", "") + dato.enlace;  
                    // Construimos la URL relativa según la base del sitio
                }

                enlace.textContent = dato.nombre;
                li.appendChild(enlace);
                cabecera.appendChild(li);
            });
        })
        .catch(error => console.error("Error al cargar la cabecera:", error));

    // ============================
    // Función para desplegar menú en móviles
    // ============================

    const nav = document.querySelector("nav");
    const menu = document.getElementById("menu");

    const toggleButton = document.createElement("button");
    toggleButton.innerHTML = "☰"; // Icono de menú hamburguesa
    toggleButton.classList.add("menu-toggle");

    nav.prepend(toggleButton);

    toggleButton.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});
