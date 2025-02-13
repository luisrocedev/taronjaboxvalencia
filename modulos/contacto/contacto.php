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
        <div class="container">
            <h2>Contacto</h2>
            <p>¿Tienes dudas? Escríbenos y te responderemos lo antes posible.</p>

            <form id="formContacto">
                <div class="input-group">
                    <input type="text" name="nombre" placeholder="Tu Nombre" required>
                </div>

                <div class="input-group">
                    <input type="email" name="email" placeholder="Tu Email" required>
                </div>

                <div class="input-group">
                    <textarea name="mensaje" placeholder="Tu Mensaje" required></textarea>
                </div>

                <button type="submit" class="btn">Enviar</button>
            </form>

            <p id="respuesta"></p>
        </div>
    </section>

    <script src="contacto.js"></script>

    <?php include("../footer/footer.php"); ?>

</body>

</html>