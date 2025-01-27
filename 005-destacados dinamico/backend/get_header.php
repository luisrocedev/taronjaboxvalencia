<?php
header('Content-Type: application/json');

// Conexión a la base de datos
$servername = "localhost";
$username = "taronjaboxvalencia";
$password = "taronjaboxvalencia";
$dbname = "taronjaboxvalencia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die(json_encode(['error' => "Conexión fallida: " . $conn->connect_error]));
}

// Consulta a la tabla 'header'
$query = "SELECT title, link FROM header ORDER BY `order` ASC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $headerData = [];

    // Obtener los datos en un array asociativo
    while ($row = $result->fetch_assoc()) {
        $headerData[] = $row;
    }

    // Devolver los datos como JSON
    echo json_encode($headerData);
} else {
    echo json_encode([]); // Si no hay datos, devolvemos un array vacío
}

// Cerrar conexión
$conn->close();
