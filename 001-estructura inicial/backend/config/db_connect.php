<?php
$servername = "localhost";  // El servidor donde se encuentra la base de datos
$username = "taronjaboxvalencia";         // El usuario de la base de datos (usualmente 'root' en local)
$password = "taronjaboxvalencia";             // Contraseña de la base de datos (vacío en local por defecto)
$dbname = "taronjaboxvalencia";     // El nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
