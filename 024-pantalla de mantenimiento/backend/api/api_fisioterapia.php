<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT titulo, descripcion, imagen FROM fisioterapia ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$fisioterapia = [];

while ($row = $result->fetch_assoc()) {
    $fisioterapia[] = $row;
}

echo json_encode($fisioterapia);

$conexion->cerrarConexion();
