<?php 
include_once(__DIR__ . "/../structure/header.php"); 
include_once(__DIR__ . "/../../../controller/tp2/ej2/controlej8.php");
include_once(__DIR__ . "/../../../utils/datasubmitted.php");

$datos = datasubmitted();

$operacion = new UserCinema(
    $datos['edad'],
    $datos['estudiante']
);
$mensaje = $operacion->valorEntrada();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?= "El precio es: " . $mensaje; ?></p>
    <a href="../ej2/formej8.php">Volver</a>
</body>
</html>
<?php include_once(__DIR__ . "/../structure/footer.php"); ?>