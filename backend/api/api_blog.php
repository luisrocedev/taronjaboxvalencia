<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT id, title, content, imagen, created_at FROM blog_posts ORDER BY created_at DESC";
$result = $conexion->conexion->query($query);

$posts = [];

while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

echo json_encode($posts);

$conexion->cerrarConexion();
