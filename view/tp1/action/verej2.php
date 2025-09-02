<?php include_once(__DIR__ . "/../structure/header.php"); 
include_once(__DIR__ . "/../../../controller/tp1/controlej2.php");
include_once(__DIR__ . "/../../../utils/datasubmitted.php");

$datos = datasubmitted();

$obj = new HorasSemana(
    $datos['lunes'],
    $datos['martes'],
    $datos['miercoles'],
    $datos['jueves'],
    $datos['viernes']
);

$mensaje = $obj->totalHoras();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?php echo "Las horas totales son: " . $mensaje; ?></p>
    <a href="../formej2.php">Volver</a>
</body>
</html>
<?php include_once(__DIR__ . "/../structure/footer.php"); ?>
