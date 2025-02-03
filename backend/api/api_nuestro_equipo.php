<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT nombre, cargo, descripcion, imagen FROM equipo ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$equipo = [];

while ($row = $result->fetch_assoc()) {
    $equipo[] = $row;
}

echo json_encode($equipo);

$conexion->cerrarConexion();
