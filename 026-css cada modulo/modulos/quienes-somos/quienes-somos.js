document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_quienes_somos.php")
        .then(response => response.json())
        .then(data => {
            console.log("Datos recibidos de API:", data); // Verifica en consola

            let container = document.querySelector("#infoQuienesSomos");
            container.innerHTML = "";
            
            data.forEach(info => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${info.title}</h3> 
                    <p>${info.content}</p> s
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
