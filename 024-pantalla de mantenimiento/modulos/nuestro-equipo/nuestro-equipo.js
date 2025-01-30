document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_nuestro_equipo.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoEquipo");
            container.innerHTML = "";
            data.forEach(miembro => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${miembro.nombre}</h3>
                    <h4>${miembro.cargo}</h4>
                    <p>${miembro.descripcion}</p>
                    <img src="${miembro.imagen}" alt="${miembro.nombre}">
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
