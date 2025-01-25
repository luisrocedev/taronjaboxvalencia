<?php include '../header.php'; ?> <!-- Incluir el header.php -->

<?php
include '../../backend/config/db_connect.php'; // Conectar a la base de datos

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener la entrada de blog por id
    $sql = "SELECT * FROM blog_posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $post = $result->fetch_assoc();  // Recuperar la entrada de blog
        echo "<h1>" . $post['title'] . "</h1>";
        echo "<p>" . $post['content'] . "</p>";
        echo "<p><small>Publicado el: " . $post['created_at'] . "</small></p>";
    } else {
        echo "<p>Entrada no encontrada.</p>";
    }
}
?>

<?php include '../footer.php'; ?> <!-- Incluir el footer.php -->