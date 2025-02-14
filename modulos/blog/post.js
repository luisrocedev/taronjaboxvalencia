/**
 * Archivo: post.js
 * Descripción: Carga dinámicamente el contenido de una publicación del blog utilizando parámetros de URL y datos obtenidos de la API.
 */

document.addEventListener("DOMContentLoaded", () => {
    // Obtener el ID del post desde los parámetros de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const postId = urlParams.get("id");

    // Verificar si no se ha proporcionado un ID válido
    if (!postId) {
        document.getElementById("post-title").textContent = "Post no encontrado.";
        return;
    }

    // Realizar una solicitud a la API para obtener el contenido del post específico
    fetch(`../../backend/api/api_blog.php?id=${postId}`)
        .then(response => response.json()) // Convertir la respuesta a formato JSON
        .then(data => {
            // Verificar si la API devuelve un error (por ejemplo, post no encontrado)
            if (data.error) {
                document.getElementById("post-title").textContent = "Post no encontrado.";
                return;
            }

            // Mostrar el título del post
            document.getElementById("post-title").textContent = data.title;

            // Mostrar la imagen asociada al post
            const postImage = document.getElementById("post-image");
            postImage.src = data.imagen;
            postImage.alt = data.title;
            postImage.classList.remove("hidden"); // Quitar la clase que oculta la imagen

            // Mostrar el contenido completo del post
            document.getElementById("post-content").textContent = data.content;

            // Mostrar la fecha de publicación en formato legible
            document.getElementById("post-date").textContent = `Publicado el: ${new Date(data.created_at).toLocaleDateString()}`;
        })
        .catch(error => {
            // Manejo de errores si falla la carga del post
            console.error("Error al cargar el post:", error);
            document.getElementById("post-title").textContent = "Error al cargar el contenido.";
        });
});
