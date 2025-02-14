<?php

/**
 * Archivo: api_header.php
 * Descripción: Recupera las opciones del menú de navegación desde la base de datos y las devuelve en formato JSON.
 * Funcionalidad:
 * - Detecta si el entorno es local o de producción para ajustar las URLs adecuadamente.
 * - Consulta la tabla `header` para obtener las opciones de navegación.
 * - Construye dinámicamente los enlaces, añadiendo el `base_url` correspondiente.
 * - Devuelve los resultados en formato JSON con una presentación clara.
 * - Cierra la conexión a la base de datos al finalizar.
 */

// Forzar el encabezado JSON para la respuesta
header('Content-Type: application/json');

// Habilitar la visualización de errores (solo en desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Detectar si el entorno es local o de producción
if ($_SERVER['HTTP_HOST'] == "localhost") {
    // Definir base URL para entorno local
    $base_url = "http://localhost/taronjaboxvalencia/";
} else {
    // Definir base URL para entorno de producción
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . "/";
}

// Crear una instancia de la conexión a la base de datos
$conexion = new ConexionBD();

// Definir la consulta para obtener las opciones del menú
$query = "SELECT id, nombre, enlace FROM header ORDER BY id ASC";

// Ejecutar la consulta
$result = $conexion->conexion->query($query);

// Inicializar un array para almacenar los resultados
$menu = [];

// Recorrer los resultados y construir las URLs adecuadas
while ($row = $result->fetch_assoc()) {
    // Ajustar el enlace para que sea válido tanto en local como en producción
    $row['enlace'] = $base_url . ltrim($row['enlace'], '/');
    $menu[] = $row;
}

// Devolver el array en formato JSON con una presentación clara
echo json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Cerrar la conexión a la base de datos
$conexion->cerrarConexion();
