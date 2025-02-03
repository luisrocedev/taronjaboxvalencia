<?php
require_once '../config/db_connect.php';

if (!isset($_GET['id'])) {
    echo json_encode(["error" => "ID no proporcionado"]);
    exit;
}

$id = intval($_GET['id']);
$conexion = new ConexionBD();

$query = "SELECT id, title, content, created_at FROM blog_posts WHERE id = ?";
$stmt = $conexion->conexion->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();

echo json_encode($post);

$conexion->cerrarConexion();
