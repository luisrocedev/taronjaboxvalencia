<?php
// Incluir el archivo de configuración
require_once '../../backend/config/db_connect.php'; // Ruta relativa al archivo db_connect.php

// Verificar si se especificó la tabla
if (isset($_GET['tabla']) && $_GET['tabla'] === 'header') {
    // Obtener todos los datos de la tabla `header`
    $headerData = $conexionBD->pideAlgo('header');
    echo $headerData; // Devolver los datos en formato JSON
} else {
    echo json_encode(['error' => 'Tabla no especificada o incorrecta']);
}
