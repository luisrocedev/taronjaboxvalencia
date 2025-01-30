<?php
require_once '../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo json_encode(["error" => "Todos los campos son obligatorios."]);
        exit;
    }

    $conexion = new ConexionBD();

    $query = "INSERT INTO contacto (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $conexion->conexion->prepare($query);
    $stmt->bind_param("sss", $nombre, $email, $mensaje);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => "Mensaje enviado correctamente."]);
    } else {
        echo json_encode(["error" => "Hubo un problema al enviar el mensaje."]);
    }

    $conexion->cerrarConexion();
}
