<?php
include_once '../structure/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario-subir-archivo-text</title>
    <link href="../../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <form>
<?php
include_once '../../../controller/tp3/ArchivoEj2.php';
include_once '../../../utils/datasubmitted.php';

$datos = datasubmitted();
$objServidor = new Archivo();
$arrayValidar = $objServidor->obtenerArchivo($datos);


if (isset($arrayValidar['error'])) {
    echo "ERROR: No se pudo cargar el archivo. Código de error: " . $arrayValidar['error'];
} elseif (!$arrayValidar['text']) {
    echo "ERROR: El tipo de archivo no es válido. Solo se permiten archivos .text";
} elseif (!$arrayValidar['tamaño']) {
    echo "ERROR: El archivo excede el tamaño máximo permitido de 2MB.";
} elseif (!$arrayValidar['subido']) {
    echo "ERROR: No se pudo guardar el archivo.";
} else {
    echo "Archivo subido con éxito.";
}

if (!empty($arrayValidar['contenido'])) {
        echo "<h3>Contenido del archivo:</h3>";
        echo "<textarea rows='10' cols='50'>" . htmlspecialchars($arrayValidar['contenido']) . "</textarea>";
    } else {
        echo "<p>No se pudo leer el contenido del archivo.</p>";
}
echo "<br>";
echo "<br>";
echo "<div class='contenedor-centrado'><a href='../2index.php' class='btn btn-primary'>Volver a la página anterior</a><div/>";
echo "<br>";
?>
    </form>
    </div>
</body>
</html>

<?php
include_once '../structure/footer.php';
?>