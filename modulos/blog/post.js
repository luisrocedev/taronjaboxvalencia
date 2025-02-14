// 📖 Cargar el post dinámicamente
document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const postId = urlParams.get("id");

    if (!postId) {
        document.getElementById("post-title").textContent = "Post no encontrado.";
        return;
    }

    fetch(`../../backend/api/api_blog.php?id=${postId}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                document.getElementById("post-title").textContent = "Post no encontrado.";
                return;
            }

            document.getElementById("post-title").textContent = data.title;
            document.getElementById("post-image").src = data.imagen;
            document.getElementById("post-image").alt = data.title;
            document.getElementById("post-image").classList.remove("hidden");
            document.getElementById("post-content").textContent = data.content;
            document.getElementById("post-date").textContent = `Publicado el: ${new Date(data.created_at).toLocaleDateString()}`;
        })
        .catch(error => {
            console.error("Error al cargar el post:", error);
            document.getElementById("post-title").textContent = "Error al cargar el contenido.";
        });
});
