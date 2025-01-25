<?php

// Función para recorrer las carpetas del proyecto y generar archivos .txt con los docstrings
function processFolder($source, $target)
{
    // Asegurarse de que la carpeta de destino exista
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }

    // Obtener los elementos dentro de la carpeta fuente
    $items = scandir($source);

    foreach ($items as $item) {
        // Omitir las referencias a los directorios especiales '.' y '..'
        if ($item === '.' || $item === '..' || $item === '.DS_Store') {
            continue;
        }

        $sourcePath = $source . DIRECTORY_SEPARATOR . $item;
        $targetPath = $target . DIRECTORY_SEPARATOR . $item;

        if (is_dir($sourcePath)) {
            // Si es un directorio, crear una carpeta correspondiente en el destino
            mkdir($targetPath, 0777, true);

            // Llamar recursivamente para procesar subcarpetas
            processFolder($sourcePath, $targetPath);
        } else if (is_file($sourcePath)) {
            // Si es un archivo PHP, procesarlo para extraer el docstring
            if (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
                // Crear el archivo .txt en la carpeta de destino correspondiente
                $fileNameWithoutExtension = pathinfo($item, PATHINFO_FILENAME);
                $fileFolderPath = $target . DIRECTORY_SEPARATOR . $fileNameWithoutExtension . '.txt'; // Crear el .txt dentro de la subcarpeta

                $docstringContent = extractDocstring($sourcePath);

                // Guardar el contenido del docstring en el archivo .txt
                file_put_contents($fileFolderPath, $docstringContent);
            }
        }
    }
}

// Función para extraer el docstring de los archivos PHP
function extractDocstring($filePath)
{
    $content = file_get_contents($filePath);
    $extension = pathinfo($filePath, PATHINFO_EXTENSION);

    switch ($extension) {
        case 'php':
            // Buscar los comentarios docstring que comienzan con /** o /*
            if (
                preg_match('/<\\?php\\s*\\/\\*\\*(.*?)\\*\\//s', $content, $matches) ||
                preg_match('/<\\?php\\s*\\/\\*(.*?)\\*\\//s', $content, $matches)
            ) {
                return trim($matches[1]);
            }
            break;

        default:
            return '';
    }

    return '';
}

// Usar la función para procesar la carpeta
$sourceFolder = '../admin'; // Ruta a tu carpeta de archivos PHP (ajústala según tu estructura)
$targetFolder = 'documentacion/docs/admin';  // Ruta de destino donde se almacenarán los archivos .txt

// Ejecutar la función de procesamiento
processFolder($sourceFolder, $targetFolder);

// Mensaje de confirmación
echo "Procesamiento completado con éxito!\n";
