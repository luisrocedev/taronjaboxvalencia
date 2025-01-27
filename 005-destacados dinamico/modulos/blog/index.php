<?php include '../header.php'; ?> <!-- Incluir el header.php -->

<?php
include '../../backend/config/db_connect.php'; // Conectar a la base de datos

// Obtener las entradas de blog
$sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$result = $conn->query($sql);

echo "<h2>Entradas de Blog</h2>";
echo "<div class='blog-container'>";

// Mostrar todas las entradas de blog
while ($row = $result->fetch_assoc()) {
    echo "<div class='blog-post'>";
    echo "<h3><a href='post.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h3>"; // Enlace al post individual
    echo "<p>" . substr($row['content'], 0, 100) . "...</p>"; // Mostrar un extracto del contenido
    echo "<p><small>Publicado el: " . $row['created_at'] . "</small></p>";
    echo "</div>";
}

echo "</div>";
?>

<?php include '../footer.php'; ?> <!-- Incluir el footer.php -->