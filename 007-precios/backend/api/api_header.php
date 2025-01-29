<?php
require_once '../config/db_connect.php';

$conexion = new ConexionBD();

$query = "SELECT nombre, enlace FROM header";
$result = $conexion->conexion->query($query);

$header = [];

while ($row = $result->fetch_assoc()) {
    $header[] = $row;
}

echo json_encode($header);

$conexion->cerrarConexion();
