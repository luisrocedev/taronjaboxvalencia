<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/db_connect.php';

// Detectar si estamos en local o en el servidor
if ($_SERVER['HTTP_HOST'] == "localhost") {
    // $base_url = "http://localhost/GitHub/taronjaboxvalencia/";  // Local
    $base_url = "http://localhost/taronjaboxvalencia/";  // Local
} else {
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . "/";  // Servidor
}

$conexion = new ConexionBD();

$query = "SELECT id, nombre, enlace FROM header ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$menu = [];

while ($row = $result->fetch_assoc()) {
    // Construir correctamente la URL según el entorno
    $row['enlace'] = $base_url . ltrim($row['enlace'], '/');
    $menu[] = $row;
}

echo json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$conexion->cerrarConexion();
