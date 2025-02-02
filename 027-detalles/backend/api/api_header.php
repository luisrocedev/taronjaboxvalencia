<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/db_connect.php';

$base_url = "http://localhost/GitHub/Primero-de-DAM-Luis-Rodriguez/taronjaboxvalencia/027-detalles/";

$conexion = new ConexionBD();

$query = "SELECT id, nombre, enlace FROM header ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$menu = [];

while ($row = $result->fetch_assoc()) {
    // Si el enlace no es una URL absoluta (http), añadimos la URL base
    $row['enlace'] = (strpos($row['enlace'], 'http') === 0) ? $row['enlace'] : $base_url . $row['enlace'];
    $menu[] = $row;
}

echo json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$conexion->cerrarConexion();
