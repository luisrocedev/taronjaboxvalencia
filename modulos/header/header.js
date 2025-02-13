document.addEventListener("DOMContentLoaded", () => {
    // ============================
    // Calcular dinámicamente la altura del header
    // ============================
    const header = document.querySelector('header');
    if (header) {
        const headerHeight = header.offsetHeight;
        document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
        console.log(`Altura dinámica del header establecida en: ${headerHeight}px`);
    }

    // ============================
    // Detectar ruta base para el fetch dinámico
    // ============================
    const currentPath = window.location.pathname;
    const basePath = currentPath.includes("/modulos/")
        ? "../../backend/api/api_header.php"
        : "backend/api/api_header.php";

    console.log("Cargando menú desde:", basePath);

    // ============================
    // Cargar dinámicamente el menú desde la API
    // ============================
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

                // Comprobar si el enlace es absoluto o relativo
                a.href = item.enlace.startsWith("http") 
                    ? item.enlace 
                    : new URL(item.enlace, window.location.origin).href;

                a.textContent = item.nombre;
                a.setAttribute("aria-label", `Ir a ${item.nombre}`);
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

    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            menu.classList.toggle("active");
            toggleBtn.classList.toggle("active");
        });

        // Cerrar menú al hacer clic en un enlace (opcional)
        menu.addEventListener("click", (event) => {
            if (event.target.tagName === "A") {
                menu.classList.remove("active");
                toggleBtn.classList.remove("active");
            }
        });
    }

    // ============================
    // Cambiar color del header al hacer scroll
    // ============================
    if (header) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 80) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    }
});
