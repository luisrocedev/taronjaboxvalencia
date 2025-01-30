document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_fisioterapia.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoFisioterapia");
            container.innerHTML = "";
            data.forEach(servicio => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${servicio.titulo}</h3>
                    <p>${servicio.descripcion}</p>
                    <img src="${servicio.imagen}" alt="${servicio.titulo}">
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
