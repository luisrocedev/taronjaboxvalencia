document.addEventListener("DOMContentLoaded", function () {
    fetch("backend/api/api_header.php")
        .then(response => response.json())
        .then(data => {
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
