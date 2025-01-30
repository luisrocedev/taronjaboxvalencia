document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_blog.php")
        .then(response => response.json())
        .then(data => {
            let blogContainer = document.querySelector("#blog");
            blogContainer.innerHTML = "";
            data.forEach(post => {
                let article = document.createElement("article");
                article.innerHTML = `
                    <h2><a href="post.php?id=${post.id}">${post.title}</a></h2>
                    <p>${post.content.substring(0, 100)}...</p>
                    <small>${post.created_at}</small>
                `;
                blogContainer.appendChild(article);
            });
        })
        .catch(error => console.error("Error al cargar el blog:", error));
});
