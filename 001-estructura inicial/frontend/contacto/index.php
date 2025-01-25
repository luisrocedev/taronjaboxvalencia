<?php include '../header.php'; ?> <!-- Incluir el header.php -->

<?php
include '../../backend/config/db_connect.php'; // Conectar a la base de datos

// Título de la sección de contacto
echo "<h2>Contacto</h2>";
?>

<!-- Formulario de contacto -->
<form method="POST" action="send_message.php">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>

    <button type="submit">Enviar Mensaje</button>
</form>

<?php
// Mostrar mensajes de confirmación si se envió correctamente el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Insertar el mensaje en la base de datos
    $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nombre, $email, $mensaje);

    if ($stmt->execute()) {
        echo "<p>Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.</p>";
    } else {
        echo "<p>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.</p>";
    }
}
?>

<?php include '../footer.php'; ?> <!-- Incluir el footer.php -->