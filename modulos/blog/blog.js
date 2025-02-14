document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_blog.php")
        .then(response => response.json())
        .then(data => {
            let blogContainer = document.querySelector("#blog-container");
            blogContainer.innerHTML = "";

            if (data.length === 0) {
                blogContainer.innerHTML = "<p class='no-posts'>No hay publicaciones disponibles.</p>";
                return;
            }

            data.forEach(post => {
                let article = document.createElement("article");
                article.classList.add("blog-card");
                article.innerHTML = `
                    <img src="${post.imagen}" alt="${post.title}" class="blog-image">
                    <div class="blog-content">
                        <h3><a href="post.php?id=${post.id}">${post.title}</a></h3>
                        <p>${post.content.substring(0, 100)}...</p>
                        <small>Publicado el: ${new Date(post.created_at).toLocaleDateString()}</small>
                    </div>
                `;
                blogContainer.appendChild(article);
            });
        })
        .catch(error => console.error("Error al cargar el blog:", error));
});
