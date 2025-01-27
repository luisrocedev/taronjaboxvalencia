<?php
// Incluir el archivo de conexión
require_once '../../backend/config/db_connect.php'; // Ruta relativa al archivo db_connect.php

// Verificar si se especificó la tabla
if (isset($_GET['tabla']) && $_GET['tabla'] === 'destacados') {
    // Obtener todos los datos de la tabla `destacados`
    $destacados = $conexionBD->pideAlgo('destacados');
    echo $destacados; // Devolver los datos en formato JSON
} else {
    echo json_encode(['error' => 'Tabla no especificada o incorrecta']);
}
