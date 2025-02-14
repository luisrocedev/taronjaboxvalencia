<?php

/**
 * Archivo: api_blog.php
 * Descripción: Recupera las publicaciones del blog desde la base de datos y las devuelve en formato JSON.
 * Funcionalidad:
 * - Establece una conexión con la base de datos utilizando la clase `ConexionBD`.
 * - Consulta las publicaciones del blog, ordenándolas por fecha de creación en orden descendente.
 * - Devuelve los resultados en formato JSON.
 * - Cierra la conexión al finalizar.
 */

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Crear una instancia de la conexión
$conexion = new ConexionBD();

// Definir la consulta para obtener las publicaciones del blog
$query = "SELECT id, title, content, imagen, created_at FROM blog_posts ORDER BY created_at DESC";

// Ejecutar la consulta
$result = $conexion->conexion->query($query);

// Inicializar un array para almacenar los resultados
$posts = [];

// Recorrer los resultados y almacenarlos en el array
while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

// Convertir el array en formato JSON y enviarlo como respuesta
echo json_encode($posts);

// Cerrar la conexión a la base de datos
$conexion->cerrarConexion();
