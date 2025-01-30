document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#formContacto").addEventListener("submit", function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        fetch("../../backend/api/api_contacto.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            document.querySelector("#respuesta").textContent = data.success || data.error;
        })
        .catch(error => console.error("Error al enviar el formulario:", error));
    });
});
