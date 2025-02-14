<?php

/**
 * Archivo: api_destacados.php
 * Descripción: Recupera el último contenido destacado de la base de datos y lo devuelve en formato JSON.
 * Funcionalidad:
 * - Establece una conexión con la base de datos utilizando la clase `ConexionBD`.
 * - Ejecuta una consulta para obtener el último registro de la tabla `destacados`.
 * - Devuelve los resultados en formato JSON.
 * - Cierra la conexión al finalizar la operación.
 */

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Crear una instancia de la conexión a la base de datos
$conexion = new ConexionBD();

// Definir la consulta para obtener el último destacado
$query = "SELECT titulo, descripcion, imagen, enlace FROM destacados ORDER BY id DESC LIMIT 1";

// Ejecutar la consulta
$result = $conexion->conexion->query($query);

// Inicializar un array para almacenar el resultado
$destacados = [];

// Recorrer el resultado y almacenar en el array
while ($row = $result->fetch_assoc()) {
    $destacados[] = $row;
}

// Convertir el array en formato JSON y enviarlo como respuesta
echo json_encode($destacados);

// Cerrar la conexión a la base de datos
$conexion->cerrarConexion();
