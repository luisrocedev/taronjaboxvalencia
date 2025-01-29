<?php
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
