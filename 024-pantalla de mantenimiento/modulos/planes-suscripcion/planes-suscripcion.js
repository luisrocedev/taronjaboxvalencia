document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_planes_suscripcion.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoPlanes");
            container.innerHTML = "";
            data.forEach(plan => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${plan.nombre}</h3>
                    <p>${plan.beneficios}</p>
                    <strong>Precio: ${plan.precio} €</strong>
                    <span>Duración: ${plan.duracion}</span>
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
