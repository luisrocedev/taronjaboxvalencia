<?php include("../header/header.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - TaronjaBox</title>
    <link rel="stylesheet" href="contacto.css">
</head>

<body>

    <section id="contacto">
        <h2>Contacto</h2>
        <form id="formContacto">
            <input type="text" name="nombre" placeholder="Tu Nombre" required>
            <input type="email" name="email" placeholder="Tu Email" required>
            <textarea name="mensaje" placeholder="Tu Mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
        <p id="respuesta"></p>
    </section>

    <script src="contacto.js"></script>

    <?php include("../footer/footer.php"); ?>

</body>

</html>