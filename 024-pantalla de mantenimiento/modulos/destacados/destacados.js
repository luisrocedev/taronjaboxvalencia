document.addEventListener("DOMContentLoaded", function () {
    fetch("backend/api/api_destacados.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoDestacado");
            container.innerHTML = "";
            data.forEach(destacado => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${destacado.titulo}</h3>
                    <p>${destacado.descripcion}</p>
                    <a href="${destacado.enlace}"><img src="${destacado.imagen}" alt="${destacado.titulo}"></a>
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar el contenido destacado:", error));
});
