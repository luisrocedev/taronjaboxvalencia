<?php
require_once '../../backend/config/db_connect.php'; // Incluir la conexión

// Obtener el dominio actual
$baseURL = "http://" . $_SERVER['HTTP_HOST']; // Construye el dominio dinámico

if (isset($_GET['tabla']) && $_GET['tabla'] === 'header') {
    // Obtener todos los datos de la tabla `header`
    $headerData = json_decode($conexionBD->pideAlgo('header'), true);

    // Actualizar las rutas relativas a absolutas
    foreach ($headerData as &$item) {
        $item['link'] = $baseURL . $item['link'];
    }

    echo json_encode($headerData); // Devolver los datos en formato JSON
} else {
    echo json_encode(['error' => 'Tabla no especificada o incorrecta']);
}
