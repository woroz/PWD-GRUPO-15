<?php
class Datos{
    public function mostrarDatos($dato, $file){
        $titulo = $dato['titulo'];
        $actores = $dato['actores'];
        $director = $dato['director'];
        $guion = $dato['guion'];
        $produccion = $dato['produccion'];
        $anio = $dato['anio'];
        $nacionalidad = $dato['nacionalidad'];
        $genero = $dato['genero'];
        $duracion = $dato['duracion'];
        $restricciones = isset($dato['restriccion']) ? $dato['restriccion'] : '';
        $targetFile = '';
        $dir = 'archivosEj3/';
        $esValido = true;

        if($restricciones == 'todo_publico'){
            $restricciones = 'Todo público';
        }elseif($restricciones == 'mayores_7'){
            $restricciones = 'Mayores de 7 años';
        }elseif($restricciones == 'mayores_18'){
            $restricciones = 'Mayores de 18 años';
        }

        if ($file['miArchivo']['error'] <= 0) {
            $validTypes = $validTypes = ['image/jpeg'];
            $fileType = $file['miArchivo']['type'];
                
            if ($file['miArchivo']['error'] <= 0) {
                $validTypes = ['image/jpeg'];
                $fileType = $file['miArchivo']['type'];
                    
                if (in_array($fileType, $validTypes)) {
                    if (!is_dir($dir)) {
                        mkdir($dir, 0755, true); // Crea el directorio con permisos 0755
                    }
                    $targetFile = $dir . basename($file['miArchivo']['name']);
                        if (!(move_uploaded_file($file['miArchivo']['tmp_name'], $targetFile))){
                            $esValido = false;
                        }
                    } else {
                        $esValido = false;
                    }
                }
        }

        $arregloDatos = array (
            $titulo,
            $actores,
            $director,
            $guion,
            $produccion,
            $anio,
            $nacionalidad,
            $genero,
            $duracion,
            $restricciones,
            $targetFile,
            $esValido
        );

        return $arregloDatos;

    }
}