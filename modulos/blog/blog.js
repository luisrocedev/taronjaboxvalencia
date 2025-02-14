/**
 * Archivo: blog.js
 * Descripción: Carga dinámicamente las publicaciones del blog desde la API y las muestra en el contenedor correspondiente.
 */

document.addEventListener("DOMContentLoaded", function () {
    // Realizar una solicitud a la API para obtener las publicaciones del blog
    fetch("../../backend/api/api_blog.php")
        .then(response => response.json()) // Convertir la respuesta a formato JSON
        .then(data => {
            // Seleccionar el contenedor donde se mostrarán las publicaciones
            let blogContainer = document.querySelector("#blog-container");
            blogContainer.innerHTML = ""; // Limpiar el contenido previo

            // Verificar si no hay publicaciones disponibles
            if (data.length === 0) {
                blogContainer.innerHTML = "<p class='no-posts'>No hay publicaciones disponibles.</p>";
                return;
            }

            // Recorrer las publicaciones recibidas y mostrarlas dinámicamente
            data.forEach(post => {
                // Crear un elemento <article> para cada publicación
                let article = document.createElement("article");
                article.classList.add("blog-card");

                // Insertar el contenido dinámico de la publicación
                article.innerHTML = `
                    <img src="${post.imagen}" alt="${post.title}" class="blog-image">
                    <div class="blog-content">
                        <h3><a href="post.php?id=${post.id}">${post.title}</a></h3>
                        <p>${post.content.substring(0, 100)}...</p>
                        <small>Publicado el: ${new Date(post.created_at).toLocaleDateString()}</small>
                    </div>
                `;

                // Agregar el artículo al contenedor del blog
                blogContainer.appendChild(article);
            });
        })
        .catch(error => console.error("Error al cargar el blog:", error)); // Capturar y mostrar errores en consola
});
