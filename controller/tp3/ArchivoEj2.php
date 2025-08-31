<?php
class Archivo {
    public function obtenerArchivo($dato) {
        $dir = 'archivosEj2/'; // Directorio donde se guardará el archivo
        $arrayErrores = array();

        if ($_FILES['miArchivo']['error'] <= 0) {
            // Validamos el tipo de archivo
            $validTypes = ['text/plain'];
            $fileType = $_FILES['miArchivo']['type'];
            
            if (in_array($fileType, $validTypes)) {
                $arrayErrores['text'] = true;

                // Validamos el tamaño (máx 2MB)
                $maxSize = 2 * 1024 * 1024;
                if ($_FILES['miArchivo']['size'] <= $maxSize) {
                    $arrayErrores['tamaño'] = true;

                    if (!is_dir($dir)) {
                        mkdir($dir, 0755, true);
                    }

                    $targetFile = $dir . basename($_FILES['miArchivo']['name']);
                    if (move_uploaded_file($_FILES['miArchivo']['tmp_name'], $targetFile)) {
                        $arrayErrores['subido'] = true;
                        $arrayErrores['ruta'] = $targetFile;

                        // ✅ Leer el contenido del archivo
                        $contenido = file_get_contents($targetFile);
                        $arrayErrores['contenido'] = $contenido;

                    } else {
                        $arrayErrores['subido'] = false;
                    }

                } else {
                    $arrayErrores['tamaño'] = false;
                }

            } else {
                $arrayErrores['text'] = false;
            }

        } else {
            $arrayErrores['error'] = $_FILES['miArchivo']['error'];
        }

        return $arrayErrores;
    }
}
