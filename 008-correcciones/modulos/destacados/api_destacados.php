<?php
// Incluir la configuración de la base de datos
require_once __DIR__ . '/../../backend/config/db_connect.php';
// Incluir la clase Database
require_once __DIR__ . '/../../backend/includes/Database.php';

// Crear una instancia de la clase Database
$database = new Database($conn);

// Obtener datos de la tabla "destacados"
$destacados = $database->getAll('destacados');

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($destacados);

// Cerrar la conexión
$database->close();
