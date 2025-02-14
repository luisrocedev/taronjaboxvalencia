document.addEventListener("DOMContentLoaded", () => {
    fetch("../../backend/api/api_quienes_somos.php")
        .then((response) => response.json())
        .then((data) => {
            const titleEl = document.querySelector("#quienes-somos h3");
            const textEl = document.querySelector("#infoQuienesSomos p");
            const container = document.querySelector("#infoQuienesSomos");

            // Limpiar contenedor
            container.innerHTML = "";

            // Asignar contenido dinámico (solo uno si es sección de presentación)
            if (data.length > 0) {
                const info = data[0];
                titleEl.textContent = info.title;
                textEl.textContent = info.content;

                // Insertar imagen debajo del texto
                const img = document.createElement("img");
                img.src = info.imagen;
                img.alt = info.title;
                container.appendChild(img);
            }
        })
        .catch((error) => console.error("Error al cargar la información:", error));
});
