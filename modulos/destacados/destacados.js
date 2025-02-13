document.addEventListener("DOMContentLoaded", function () {
    // Detectar ruta base para el fetch dinámico
    const currentPath = window.location.pathname;
    const basePath = currentPath.includes("/modulos/")
        ? "../../backend/api/api_destacados.php"
        : "backend/api/api_destacados.php";

    console.log("Cargando destacados desde:", basePath);

    // Cargar dinámicamente los destacados desde la API
    fetch(basePath)
        .then(response => {
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            return response.json();
        })
        .then(data => {
            const container = document.querySelector("#infoDestacado");
            container.innerHTML = "";

            if (data.length === 0) {
                container.innerHTML = "<p class='loading-text'>No hay destacados disponibles.</p>";
                return;
            }

            data.forEach(destacado => {
                const item = document.createElement("div");
                item.classList.add("destacado-item");

                // Crear estructura interna
                item.innerHTML = `
                    <img src="${destacado.imagen}" alt="${destacado.titulo}" onerror="this.src='public/img/placeholder.png'">
                    <h3>${destacado.titulo}</h3>
                    <p>${destacado.descripcion}</p>
                    <a href="${destacado.enlace}" target="_blank" rel="noopener noreferrer">Ver más</a>
                `;
                container.appendChild(item);
            });
        })
        .catch(error => {
            console.error("Error al cargar el contenido destacado:", error);
            document.querySelector("#infoDestacado").innerHTML = "<p class='loading-text'>Error al cargar destacados.</p>";
        });
});
