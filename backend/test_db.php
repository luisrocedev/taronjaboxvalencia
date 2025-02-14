<?php

/**
 * Archivo: test_conexion.php
 * Descripción: Prueba la conexión a la base de datos utilizando la clase `ConexionBD`.
 * Funcionalidad:
 * - Crea una instancia de la clase `ConexionBD`.
 * - Verifica si la conexión fue exitosa.
 * - Muestra un mensaje indicando el estado de la conexión.
 * - Cierra la conexión una vez realizada la prueba.
 */

require_once 'config/db_connect.php';

// Crear una instancia de la conexión
$conexion = new ConexionBD();

// Verificar si la conexión fue exitosa
if ($conexion->conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error en la conexión.";
}

// Cerrar la conexión
$conexion->cerrarConexion();
