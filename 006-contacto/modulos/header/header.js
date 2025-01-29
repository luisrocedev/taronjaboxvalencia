document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_header.php") // Ruta relativa desde `modulos/header/`
        .then(response => response.json())
        .then(data => {
            let nav = document.querySelector("nav");
            nav.innerHTML = "";
            data.forEach(item => {
                let link = document.createElement("a");
                link.href = item.enlace;
                link.textContent = item.nombre;
                nav.appendChild(link);
            });
        })
        .catch(error => console.error("Error al cargar el header:", error));
});
