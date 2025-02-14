/**
 * Archivo: contacto.js
 * Descripción: Gestiona el envío del formulario de contacto, enviando los datos a la API y mostrando mensajes dinámicos de respuesta.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Seleccionar el formulario, el elemento de respuesta y el botón de envío
    const form = document.querySelector("#formContacto");
    const respuesta = document.querySelector("#respuesta");
    const submitBtn = form.querySelector("button[type='submit']");

    // Agregar un event listener para gestionar el envío del formulario
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar el envío por defecto

        // Crear un objeto FormData con los datos del formulario
        let formData = new FormData(this);

        // Deshabilitar el botón de envío temporalmente y mostrar mensaje de progreso
        submitBtn.disabled = true;
        submitBtn.textContent = "Enviando...";

        // Enviar los datos al servidor mediante una petición POST
        fetch("../../backend/api/api_contacto.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // Convertir la respuesta a formato JSON
        .then(data => {
            // Restaurar el botón a su estado original
            submitBtn.disabled = false;
            submitBtn.textContent = "Enviar";

            // Mostrar mensaje de respuesta con color según el resultado
            respuesta.textContent = data.success || data.error;
            respuesta.style.color = data.success ? "green" : "red";

            // Limpiar el formulario si el mensaje fue enviado con éxito
            if (data.success) {
                form.reset();
            }
        })
        .catch(error => {
            // Manejo de errores de red u otros problemas
            console.error("Error al enviar el formulario:", error);
            respuesta.textContent = "Hubo un error, inténtalo de nuevo.";
            respuesta.style.color = "red";

            // Restaurar el botón en caso de error
            submitBtn.disabled = false;
            submitBtn.textContent = "Enviar";
        });
    });
});
