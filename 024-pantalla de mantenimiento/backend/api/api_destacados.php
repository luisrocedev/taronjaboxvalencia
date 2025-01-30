<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT titulo, descripcion, imagen, enlace FROM destacados ORDER BY id DESC LIMIT 1";
$result = $conexion->conexion->query($query);

$destacados = [];

while ($row = $result->fetch_assoc()) {
    $destacados[] = $row;
}

echo json_encode($destacados);

$conexion->cerrarConexion();
