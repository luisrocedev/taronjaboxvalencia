document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_quienes_somos.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoQuienesSomos");
            container.innerHTML = "";
            data.forEach(info => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${info.titulo}</h3>
                    <p>${info.descripcion}</p>
                    <img src="${info.imagen}" alt="${info.titulo}">
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
