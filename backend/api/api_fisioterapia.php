<?php

/**
 * Archivo: api_fisioterapia.php
 * Descripción: Recupera la lista de servicios de fisioterapia desde la base de datos y la devuelve en formato JSON.
 * Funcionalidad:
 * - Establece una conexión con la base de datos utilizando la clase `ConexionBD`.
 * - Ejecuta una consulta SQL para obtener todos los registros de la tabla `fisioterapia`.
 * - Devuelve el resultado en formato JSON con una presentación legible.
 * - Muestra mensajes de error si ocurre algún fallo durante la consulta.
 * - Cierra la conexión al finalizar la operación.
 */

// Forzar el encabezado JSON para la respuesta
header('Content-Type: application/json');

// Habilitar la visualización de errores (solo en desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Crear una instancia de la conexión
$conexion = new ConexionBD();

// Definir la consulta para obtener los servicios de fisioterapia
$query = "SELECT nombre, descripcion, costo FROM fisioterapia ORDER BY id ASC";

// Ejecutar la consulta
$result = $conexion->conexion->query($query);

// Verificar si hubo un error en la ejecución de la consulta
if (!$result) {
    echo json_encode(["error" => "Error en la consulta SQL: " . $conexion->conexion->error]);
    exit;
}

// Inicializar un array para almacenar los resultados
$fisioterapia = [];

// Recorrer los resultados y almacenarlos en el array
while ($row = $result->fetch_assoc()) {
    $fisioterapia[] = $row;
}

// Devolver el array en formato JSON con una presentación más legible
echo json_encode($fisioterapia, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Cerrar la conexión a la base de datos
$conexion->cerrarConexion();
