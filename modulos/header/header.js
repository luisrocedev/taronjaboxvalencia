document.addEventListener("DOMContentLoaded", () => {
    // Detectar ruta base para el fetch dinámico
    const currentPath = window.location.pathname;
    const basePath = currentPath.includes("/modulos/")
        ? "../../backend/api/api_header.php"
        : "backend/api/api_header.php";

    console.log("Cargando menú desde:", basePath);

    // Cargar dinámicamente el menú desde la API
    fetch(basePath)
        .then(response => {
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            return response.json();
        })
        .then(data => {
            const menu = document.getElementById("menu");
            if (!menu) return console.error("Elemento #menu no encontrado");

            menu.innerHTML = "";
            data.forEach(item => {
                const li = document.createElement("li");
                const a = document.createElement("a");
                a.href = item.enlace.startsWith("http") 
                    ? item.enlace 
                    : basePath.replace("backend/api/api_header.php", "") + item.enlace;
                a.textContent = item.nombre;
                a.setAttribute('aria-label', `Ir a ${item.nombre}`);
                li.appendChild(a);
                menu.appendChild(li);
            });
        })
        .catch(error => console.error("Error al cargar el menú:", error));

    // ============================
    // Menú hamburguesa responsive
    // ============================
    const toggleBtn = document.querySelector(".menu-toggle");
    const menu = document.getElementById("menu");

    toggleBtn.addEventListener("click", () => {
        menu.classList.toggle("active");
        toggleBtn.classList.toggle("active");
    });

    // ============================
    // Cambiar color del header al hacer scroll
    // ============================
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 80);
    });
});
