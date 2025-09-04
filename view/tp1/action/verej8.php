<?php include_once(__DIR__ . "/../structure/header.php"); 
include_once(__DIR__ . "/../../../controller/tp1/controlej8.php");
include_once(__DIR__ . "/../../../utils/datasubmitted.php");

$datos = datasubmitted();

$obj = new UserCinema(
    $datos['edad'],
    $datos['estudiante']
);

$mensaje = $obj->valorEntrada();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?php echo "El valor de la entrada es: " . $mensaje; ?></p>
    <a href="../formej8.php">Volver</a>
</body>
</html>
<?php include_once(__DIR__ . "/../structure/footer.php"); ?>
