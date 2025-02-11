<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT title, content, imagen FROM quienes_somos ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$quienes_somos = [];

while ($row = $result->fetch_assoc()) {
    $quienes_somos[] = $row;
}

echo json_encode($quienes_somos);

$conexion->cerrarConexion();
