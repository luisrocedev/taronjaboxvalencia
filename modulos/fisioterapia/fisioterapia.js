document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_fisioterapia.php")
        .then(response => response.json())
        .then(data => {
            console.log("Datos recibidos:", data); // Verifica en la consola

            let container = document.querySelector("#infoFisioterapia");
            container.innerHTML = "";

            data.forEach(servicio => {
                let section = document.createElement("div");
                section.classList.add("fisioterapia-item");
                section.innerHTML = `
                    <h3>${servicio.nombre}</h3>
                    <p>${servicio.descripcion}</p>
                    <div class="costo">Costo: ${servicio.costo} €</div>
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
