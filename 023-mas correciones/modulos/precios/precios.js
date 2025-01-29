document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_precios.php")
        .then(response => response.json())
        .then(data => {
            let preciosContainer = document.querySelector("#listaPrecios");
            preciosContainer.innerHTML = "";
            data.forEach(plan => {
                let div = document.createElement("div");
                div.innerHTML = `
                    <h3>${plan.nombre}</h3>
                    <p>${plan.descripcion}</p>
                    <strong>${plan.precio} €</strong>
                    <small>Fecha de creación: ${plan.fecha_creacion}</small>
                `;
                preciosContainer.appendChild(div);
            });
        })
        .catch(error => console.error("Error al cargar los precios:", error));
});
