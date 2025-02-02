<?php
header('Content-Type: application/json'); // Forzar JSON
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/db_connect.php';

$conexion = new ConexionBD();

// Ejecutar consulta
$query = "SELECT nombre, descripcion, costo FROM fisioterapia ORDER BY id ASC";
$result = $conexion->conexion->query($query);

// Verificar si hay errores en la consulta
if (!$result) {
    echo json_encode(["error" => "Error en la consulta SQL: " . $conexion->conexion->error]);
    exit;
}

$fisioterapia = [];

while ($row = $result->fetch_assoc()) {
    $fisioterapia[] = $row;
}

echo json_encode($fisioterapia, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$conexion->cerrarConexion();
