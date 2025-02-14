document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_quienes_somos.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoQuienesSomos");
            container.innerHTML = "";
            data.forEach(persona => {
                let section = document.createElement("div");
                section.classList.add("card");
                section.innerHTML = `
                    <img src="${persona.imagen}" alt="${persona.title}">
                    <p>${persona.content}</p>
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
