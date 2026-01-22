<?php
$folder = 'uploads/logos'; // Carpeta de logos
$zipFile = 'logos.zip';

// Crear el archivo ZIP
$zip = new ZipArchive();
if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    $files = scandir($folder);
    foreach ($files as $file) {
        if (!is_dir($file)) {
            $zip->addFile("$folder/$file", $file);
        }
    }
    $zip->close();

    // Enviar el archivo ZIP al cliente
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="logos_cecybot2025.zip"');
    header('Content-Length: ' . filesize($zipFile));
    readfile($zipFile);

    // Eliminar el archivo ZIP temporalmente creado
    unlink($zipFile);
} else {
    echo 'Error al crear el archivo ZIP.';
}
?>