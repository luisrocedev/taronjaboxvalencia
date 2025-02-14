document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_blog.php")
        .then(response => response.json())
        .then(data => {
            const container = document.querySelector("#blog-container");
            container.innerHTML = ""; // Limpiar el contenido de carga
            
            if (data.length === 0) {
                container.innerHTML = "<p class='no-posts'>No hay publicaciones disponibles.</p>";
                return;
            }

            data.forEach(post => {
                const article = document.createElement("article");
                article.classList.add("blog-card");
                article.innerHTML = `
                    <img src="${post.image || 'https://via.placeholder.com/800x400'}" alt="${post.title}" class="blog-image">
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="post.php?id=${post.id}">${post.title}</a></h3>
                        <p class="blog-excerpt">${post.content.substring(0, 150)}...</p>
                        <div class="blog-footer">
                            <span class="blog-date">🗓️ ${new Date(post.created_at).toLocaleDateString()}</span>
                            <a href="post.php?id=${post.id}" class="btn-read-more">Leer más</a>
                        </div>
                    </div>
                `;
                container.appendChild(article);
            });
        })
        .catch(error => {
            console.error("Error al cargar el blog:", error);
            document.querySelector("#blog-container").innerHTML = "<p class='error'>Error al cargar el contenido. Por favor, inténtelo más tarde.</p>";
        });
});
