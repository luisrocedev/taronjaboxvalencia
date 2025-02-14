document.addEventListener("DOMContentLoaded", () => {
    fetch("../../backend/api/api_blog.php")
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById("blog-container");
            container.innerHTML = ""; // Limpiar antes de agregar contenido

            if (data.length === 0) {
                container.innerHTML = "<p class='loading-text'>No hay publicaciones disponibles.</p>";
                return;
            }

            // Crear tarjetas de blog dinámicamente
            data.forEach(post => {
                const article = document.createElement("div");
                article.classList.add("blog-card");
                article.innerHTML = `
                    <img src="${post.image_url}" alt="${post.title}">
                    <div class="blog-content">
                        <h3><a href="post.php?id=${post.id}">${post.title}</a></h3>
                        <p>${post.content.substring(0, 150)}...</p>
                        <span class="blog-date">📅 ${post.created_at}</span>
                    </div>
                `;
                container.appendChild(article);

                // Redirigir al hacer clic en la tarjeta
                article.addEventListener("click", () => {
                    window.location.href = `post.php?id=${post.id}`;
                });
            });
        })
        .catch(error => {
            document.getElementById("blog-container").innerHTML = 
                `<p class="loading-text">❌ Error al cargar las publicaciones.</p>`;
            console.error("Error al cargar el blog:", error);
        });
});
