<?php
// Obtener los datos del header desde la API
$headerData = file_get_contents(__DIR__ . '/api_header.php');

// Verificar si se obtuvieron datos válidos
if ($headerData === false) {
    die("Error: No se pudieron obtener los datos del header.");
}

// Decodificar el JSON
$headerData = json_decode($headerData, true);

// Verificar si el JSON es válido
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error: Los datos del header no son un JSON válido.");
}

// Verificar si hay datos en el header
if (empty($headerData)) {
    die("Error: No hay datos en el header.");
}
?>

<header>
    <div class="logo">
        <img src="<?php echo $headerData['logo_url']; ?>" alt="Logo">
        <h1><?php echo $headerData['titulo']; ?></h1>
    </div>
    <nav>
        <ul>
            <?php
            $menu = json_decode($headerData['menu'], true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($menu)) {
                foreach ($menu as $item) {
                    echo "<li><a href='{$item['url']}'>{$item['texto']}</a></li>";
                }
            } else {
                echo "<li>Error: El menú no es válido.</li>";
            }
            ?>
        </ul>
    </nav>
</header>