<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Dinámico</title>

</head>

<body>
    <header>
        <nav>
            <ul></ul> <!-- Aquí se generarán dinámicamente los enlaces -->
        </nav>
    </header>

    <!-- Plantilla para los elementos del menú -->
    <template id="elementomenu">
        <li><a href="#"></a></li>
    </template>

    <script src="modulos/header/header.js" defer></script> <!-- Vincular el archivo JS -->
</body>

</html>