<?php

/**
 * Archivo: api_planes_suscripcion.php
 * Descripción: Recupera la lista de planes de suscripción desde la base de datos y devuelve los datos en formato JSON.
 * Funcionalidad:
 * - Establece una conexión con la base de datos utilizando la clase `ConexionBD`.
 * - Consulta la tabla `planes_suscripcion` para obtener los detalles de cada plan.
 * - Devuelve los resultados en formato JSON.
 * - Cierra la conexión a la base de datos al finalizar.
 */

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Crear una instancia de la conexión
$conexion = new ConexionBD();

// Definir la consulta para obtener la información de los planes de suscripción
$query = "SELECT nombre, beneficios, precio, duracion FROM planes_suscripcion ORDER BY id ASC";

// Ejecutar la consulta
$result = $conexion->conexion->query($query);

// Inicializar un array para almacenar los resultados
$planes = [];

// Recorrer los resultados y almacenarlos en el array
while ($row = $result->fetch_assoc()) {
    $planes[] = $row;
}

// Convertir el array en formato JSON y enviarlo como respuesta
echo json_encode($planes, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Cerrar la conexión a la base de datos
$conexion->cerrarConexion();
