<?php

/**
 * Archivo: api_contacto.php
 * Descripción: Recibe los datos enviados desde el formulario de contacto y los guarda en la base de datos.
 * Funcionalidad:
 * - Valida los datos enviados mediante una solicitud POST.
 * - Inserta un nuevo mensaje en la tabla `contacto`.
 * - Devuelve una respuesta en formato JSON indicando el resultado de la operación.
 * - Cierra la conexión al finalizar.
 */

// Incluir la clase de conexión a la base de datos
require_once '../config/db_connect.php';

// Verificar que la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger y limpiar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Validar que todos los campos están completos
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo json_encode(["error" => "Todos los campos son obligatorios."]);
        exit;
    }

    // Crear una instancia de la conexión a la base de datos
    $conexion = new ConexionBD();

    // Preparar la consulta SQL para insertar los datos
    $query = "INSERT INTO contacto (nombre, email, mensaje) VALUES (?, ?, ?)";

    // Preparar la sentencia para evitar inyecciones SQL
    $stmt = $conexion->conexion->prepare($query);
    $stmt->bind_param("sss", $nombre, $email, $mensaje);
    $stmt->execute();

    // Verificar si se insertaron los datos correctamente
    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => "Mensaje enviado correctamente."]);
    } else {
        echo json_encode(["error" => "Hubo un problema al enviar el mensaje."]);
    }

    // Cerrar la conexión a la base de datos
    $conexion->cerrarConexion();
}
