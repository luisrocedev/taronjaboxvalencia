<?php
header('Content-Type: application/json'); // 🔹 Forzar salida en formato JSON
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT nombre, enlace FROM header ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$menu = [];

while ($row = $result->fetch_assoc()) {
    $menu[] = $row;
}

echo json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$conexion->cerrarConexion();
