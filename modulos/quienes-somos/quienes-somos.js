document.addEventListener("DOMContentLoaded", () => {
    fetch("../../backend/api/api_quienes_somos.php")
        .then((response) => response.json())
        .then((data) => {
            const titleEl = document.querySelector("#quienes-somos h3");
            const container = document.querySelector("#infoQuienesSomos");

            // Limpiar contenedor
            container.innerHTML = "";

            // Asignar contenido dinámico
            if (data.length > 0) {
                const info = data[0];
                titleEl.textContent = info.title;

                // Agregar imagen
                const img = document.createElement("img");
                img.src = info.imagen;
                img.alt = info.title;

                // Agregar texto
                const text = document.createElement("p");
                text.textContent = info.content;

                container.appendChild(img);
                container.appendChild(text);
            }
        })
        .catch((error) => console.error("Error al cargar la información:", error));
});
