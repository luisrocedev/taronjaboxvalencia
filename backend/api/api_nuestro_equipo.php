<?php

/**
 * Archivo: api_equipo.php
 * Descripción: Recupera la lista de miembros del equipo desde la base de datos y devuelve los datos en formato JSON.
 * Funcionalidad:
 * - Establece una conexión con la base de datos utilizando la clase `ConexionBD`.
 * - Consulta la tabla `equipo` para obtener el nombre, cargo, descripción e imagen de cada miembro.
 * - Devuelve los resultados en formato JSON.
 * - Cierra la conexión a la base de datos al finalizar.
 */

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Crear una instancia de la conexión
$conexion = new ConexionBD();

// Definir la consulta para obtener la información del equipo
$query = "SELECT nombre, cargo, descripcion, imagen FROM equipo ORDER BY id ASC";

// Ejecutar la consulta
$result = $conexion->conexion->query($query);

// Inicializar un array para almacenar los resultados
$equipo = [];

// Recorrer los resultados y almacenarlos en el array
while ($row = $result->fetch_assoc()) {
    $equipo[] = $row;
}

// Convertir el array en formato JSON y enviarlo como respuesta
echo json_encode($equipo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Cerrar la conexión a la base de datos
$conexion->cerrarConexion();
