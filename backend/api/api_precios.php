<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT id, nombre, descripcion, precio, fecha_creacion FROM precios ORDER BY fecha_creacion DESC";
$result = $conexion->conexion->query($query);

$precios = [];

while ($row = $result->fetch_assoc()) {
    $precios[] = $row;
}

echo json_encode($precios);

$conexion->cerrarConexion();
