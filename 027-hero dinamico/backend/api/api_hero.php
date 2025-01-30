<?php
// Permitir peticiones desde el frontend
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Incluir conexión a la base de datos
include_once("../config/db_connect.php");

// Obtener la sección solicitada desde el parámetro GET
$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : '';

if (empty($seccion)) {
    echo json_encode(["error" => "Sección no especificada"]);
    exit;
}

// Consultar el Hero de la sección
$sql = "SELECT * FROM heroes WHERE nombre_seccion = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $seccion);
$stmt->execute();
$resultado = $stmt->get_result();
$hero = $resultado->fetch_assoc();

// Si se encuentra el hero, devolverlo en JSON
if ($hero) {
    echo json_encode($hero);
} else {
    echo json_encode(["error" => "Hero no encontrado"]);
}
