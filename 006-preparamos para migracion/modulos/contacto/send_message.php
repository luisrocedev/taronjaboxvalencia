<?php
include '../../backend/config/db_connect.php';  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Insertar el mensaje en la base de datos
    $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nombre, $email, $mensaje);

    if ($stmt->execute()) {
        $message = "Mensaje enviado correctamente.";
    } else {
        $message = "Error al enviar el mensaje.";
    }
}
?>

<?php if (isset($message)) {
    echo "<p>$message</p>";
} ?>
