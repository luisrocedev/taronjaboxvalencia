<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT titulo, descripcion, imagen FROM quienes_somos ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$info = [];

while ($row = $result->fetch_assoc()) {
    $info[] = $row;
}

echo json_encode($info);

$conexion->cerrarConexion();
