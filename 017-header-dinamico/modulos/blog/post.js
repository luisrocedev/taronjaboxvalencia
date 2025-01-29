document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const postId = urlParams.get("id");

    if (!postId) {
        document.querySelector("#post").innerHTML = "<p>Error: No se encontró el post.</p>";
        return;
    }

    fetch(`../../backend/api/api_post.php?id=${postId}`)
        .then(response => response.json())
        .then(post => {
            let postContainer = document.querySelector("#post");
            postContainer.innerHTML = `
                <h2>${post.title}</h2>
                <p>${post.content}</p>
                <small>${post.created_at}</small>
            `;
        })
        .catch(error => console.error("Error al cargar el post:", error));
});
