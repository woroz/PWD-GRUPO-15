<?php
include_once '../structure/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form-cine.css" />
    <link href="../../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
    <title>Datos Cinema</title>
</head>
<body>
    <h1>LA PELÍCULA INTRODUCIDA ES:</h1>
   <?php
   include_once '../../../controller/tp3/DatosEj3.php';
   include_once '../../../utils/datasubmitted.php';

   $datos = datasubmitted();
   $objDatos = new Datos();
   $arrayCinema = $objDatos->mostrarDatos($datos, $_FILES);
   $titulo = $arrayCinema[0];
   $actores = $arrayCinema[1];
   $director = $arrayCinema[2];
   $guion = $arrayCinema[3];
   $produccion = $arrayCinema[4];
   $anio = $arrayCinema[5];
   $nacionalidad = $arrayCinema[6];
   $genero = $arrayCinema[7];
   $duracion = $arrayCinema[8];
   $restricciones = $arrayCinema[9];
   $imagen = $arrayCinema[10];
   $valor = $arrayCinema[11];
   echo "<div class='form-container'>";
   if ($valor){
   echo "<img style='float: right; border: solid 3px; border-color: #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);' width='250' height='250' src=\"" . htmlspecialchars($imagen) . "\" alt=\"Imagen de la película\">";
   }else{
         echo "ERROR: No se pudo guardar la imagen. <br>";
         echo "ERROR: El tipo de archivo no es válido. Solo se permiten imágenes JPEG.";
   }
   echo "<p><b>Titulo:</b> ".$titulo.".</p>";
   echo "<p><b>Actores:</b> ".$actores.".</p>";
   echo "<p><b>Director:</b> ".$director.".</p>";
   echo "<p><b>Guión:</b> ".$guion.".</p>";
   echo "<p><b>Producción:</b> ".$produccion.".</p>";
   echo "<p><b>Año:</b> ".$anio.".</p>";
   echo "<p><b>Nacionalidad:</b> ".$nacionalidad.".</p>";
   echo "<p><b>Género:</b> ".$genero.".</p>";
   echo "<p><b>Duración:</b> ".$duracion." minutos.</p>";
   echo "<p><b>Restricciones de edad:</b> ".$restricciones.".</p>";
   echo "</div>";
   echo "<br>";
   echo "<br>";
   echo "<div class='contenedor-centrado'><a href='../3index.php' class='btn btn-primary'>Volver a la página anterior</a><div/>";
   echo "<br>";
   ?>
</body>
</html>

<?php
include_once '../structure/footer.php';
?>