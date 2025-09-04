<?php 
include_once(__DIR__ . "/../structure/header.php"); 
include_once(__DIR__  . "/../../../controller/tp2/ej2/controlej7.php");
include_once(__DIR__  . "/../../../utils/datasubmitted.php");

$datos = datasubmitted();

$operacion = new Operacion(
    $datos['operando1'],
    $datos['operando2'],
    $datos['select']
);
$mensaje = $operacion->operacion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?= "El resultado es: " . $mensaje; ?></p>
    <a href="../ej2/formej7.php">Volver</a>
</body>
</html>
<?php include_once(__DIR__  . "/../structure/footer.php"); ?>