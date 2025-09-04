<?php
class Archivo{
    public function obtenerArchivo($dato) {
    $dir = 'archivosEj1/'; // Directorio donde se guardará el archivoç
    // Comprobamos si se han producido errores
    if ($_FILES['miArchivo']['error'] <= 0) {
        // Validamos el tipo de archivo
        $validTypes = ['application/pdf', 'application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document' ];
        $fileType = $_FILES['miArchivo']['type'];
        $arrayErrores = array();
        
        if (in_array($fileType, $validTypes)) {
            $arrayErrores['pdfoword'] = true;
            // Validamos el tamaño del   archivo (máximo 2MB)
            
            $maxSize = 2 * 1024 * 1024; // 2MB en bytes
            //$maxSize = 1; Para probar si funciona.
            if ($_FILES['miArchivo']['size'] <= $maxSize) {
                $arrayErrores['tamaño'] = true;
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true); // Crea el directorio con permisos 0755
                }
                // Intentamos mover el archivo al servidor
                $targetFile = $dir . basename($_FILES['miArchivo']['name']);
                if (move_uploaded_file($_FILES['miArchivo']['tmp_name'], $targetFile)) {
                    $subido = true;
                    $arrayErrores['subido'] = true;
                }else {
                    $arrayErrores['subido'] = false;
                }
            } else {
                $arrayErrores['tamaño'] = false;
           }
        }else {
            $arrayErrores['pdfoword'] = false;
        }
        $arrayErrores['tipo'] = htmlspecialchars($fileType);
    } else {
        $error = $_FILES['miArchivo']['error'];
        $arrayErrores['error'] = $error;
    }

    if (isset($arrayErrores['subido']) && $arrayErrores['subido'] === true) {
    $arrayErrores['ruta'] = $targetFile;
}
    return $arrayErrores;
}
}
?>
