<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../config/db_connect.php';

$conexion = new ConexionBD();
$query = "SELECT id, nombre, enlace FROM header ORDER BY id ASC";

$result = $conexion->conexion->query($query);

if (!$result) {
    echo json_encode(["error" => "Error en la consulta SQL: " . $conexion->conexion->error]);
    exit;
}

$menu = [];
while ($row = $result->fetch_assoc()) {
    $menu[] = $row;
}

echo json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$conexion->cerrarConexion();
