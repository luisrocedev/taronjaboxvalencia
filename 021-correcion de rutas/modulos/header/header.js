document.addEventListener("DOMContentLoaded", function () {
    let basePath = window.location.pathname.split("/").slice(0, -1).join("/"); // Obtiene la ruta base dinámica
    fetch(basePath + "/backend/api/api_header.php") 
        .then(response => response.json())
        .then(data => {
            console.log("Datos recibidos:", data); // Verificar en consola
            let menu = document.querySelector("#menu");
            menu.innerHTML = "";
            data.forEach(item => {
                let link = document.createElement("a");
                link.href = item.enlace;
                link.textContent = item.nombre;
                menu.appendChild(link);
            });
        })
        .catch(error => console.error("Error al cargar el header:", error));
});
