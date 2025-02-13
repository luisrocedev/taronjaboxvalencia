document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#formContacto");
    const respuesta = document.querySelector("#respuesta");
    const submitBtn = form.querySelector("button[type='submit']");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        // Deshabilitar botón y mostrar "Enviando..."
        submitBtn.disabled = true;
        submitBtn.textContent = "Enviando...";

        fetch("../../backend/api/api_contacto.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Restaurar botón
            submitBtn.disabled = false;
            submitBtn.textContent = "Enviar";

            // Mostrar respuesta con color dinámico
            respuesta.textContent = data.success || data.error;
            respuesta.style.color = data.success ? "green" : "red";

            // Resetear el formulario si el envío fue exitoso
            if (data.success) {
                form.reset();
            }
        })
        .catch(error => {
            console.error("Error al enviar el formulario:", error);
            respuesta.textContent = "Hubo un error, inténtalo de nuevo.";
            respuesta.style.color = "red";

            // Restaurar botón en caso de error
            submitBtn.disabled = false;
            submitBtn.textContent = "Enviar";
        });
    });
});
