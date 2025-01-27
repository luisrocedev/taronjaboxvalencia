<!doctype html>
<html>

<head>
    <style>
        /* General styling */
        body {
            font-family: 'Georgia', serif;
            line-height: 1.5;
            color: #333;
        }

        h1,
        h2,
        h3 {
            text-align: center;
            color: #111;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 2rem;
            background-color: #fafafa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul.toc {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul.toc li {
            margin: 5px 0;
        }

        pre {
            font-family: 'Courier New', monospace;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Documentación del Proyecto: TaronjaBox</h1>

        <h2>Tabla de contenido</h2>
        <ul class="toc">
            <?php
            // Ruta a la carpeta 'docs'
            $baseDir = 'documentacion/docs';

            // Función recursiva para procesar las carpetas y mostrar los archivos .txt
            function processFolderForHtml($source)
            {
                $html = "";
                $items = scandir($source);
                foreach ($items as $item) {
                    if ($item === '.' || $item === '..') {
                        continue;
                    }

                    $sourcePath = $source . DIRECTORY_SEPARATOR . $item;
                    if (is_dir($sourcePath)) {
                        $html .= "<li><strong>📁 $item</strong><ul>";
                        $html .= processFolderForHtml($sourcePath);
                        $html .= "</ul></li>";
                    } else if (is_file($sourcePath) && pathinfo($item, PATHINFO_EXTENSION) === 'txt') {
                        $fileNameWithoutExtension = pathinfo($item, PATHINFO_FILENAME);
                        // Crear enlaces dinámicos a los archivos .txt
                        $fileUrl = 'documentacion/docs/' . $item;
                        $html .= "<li><a href='$fileUrl'>$fileNameWithoutExtension</a></li>";
                    }
                }
                return $html;
            }

            echo processFolderForHtml($baseDir);
            ?>
        </ul>

        <div class="page-break"></div>
        <h2>Contenido de la documentación</h2>
        <?php
        // Mostrar el contenido de los archivos .txt
        if (isset($_GET['file'])) {
            $file = $_GET['file'];
            $filePath = $baseDir . DIRECTORY_SEPARATOR . $file;

            if (file_exists($filePath)) {
                $content = htmlspecialchars(file_get_contents($filePath));
                echo "<pre>$content</pre>";  // Mostrar el contenido en formato preformateado
            } else {
                echo "<p>El archivo no existe.</p>";
            }
        }
        ?>
    </div>
</body>

</html>