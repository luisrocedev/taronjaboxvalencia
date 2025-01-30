<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT titulo, descripcion, duracion, imagen FROM workouts ORDER BY id ASC";
$result = $conexion->conexion->query($query);

$workouts = [];

while ($row = $result->fetch_assoc()) {
    $workouts[] = $row;
}

echo json_encode($workouts);

$conexion->cerrarConexion();
