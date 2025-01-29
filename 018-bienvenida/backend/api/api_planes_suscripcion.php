<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT nombre, beneficios, precio, duracion FROM planes_suscripcion ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$planes = [];

while ($row = $result->fetch_assoc()) {
    $planes[] = $row;
}

echo json_encode($planes);

$conexion->cerrarConexion();
