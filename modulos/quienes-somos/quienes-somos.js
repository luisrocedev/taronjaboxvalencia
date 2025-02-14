document.addEventListener("DOMContentLoaded", () => {
    fetch("../../backend/api/api_quienes_somos.php")
        .then((response) => response.json())
        .then((data) => {
            const container = document.querySelector("#quienes-somos .content");

            if (data.length > 0) {
                const info = data[0];
                container.innerHTML = `
                    <h3>${info.title}</h3>
                    <p>${info.content}</p>
                    <a href="/contacto" class="cta-button">¡Conócenos más!</a>
                `;

                // Establecer la imagen dinámica en el fondo
                document.querySelector("#quienes-somos").style.setProperty(
                    "--bg-image",
                    `url('${info.imagen}')`
                );
            }
        })
        .catch((error) => console.error("Error al cargar la información:", error));
});
