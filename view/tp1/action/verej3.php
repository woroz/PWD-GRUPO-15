<?php include_once(__DIR__ . "/../structure/header.php"); 
include_once(__DIR__ . "/../../../controller/tp1/controlej3y4.php");
include_once(__DIR__ . "/../../../utils/datasubmitted.php");

$datos = datasubmitted();

$obj = new Persona(
    $datos['nombre'],
    $datos['apellido'],
    $datos['edad'],
    $datos['direccion']
);

$mensaje = $obj->resumen();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?php echo $mensaje; ?></p>
    <a href="../formej3.php">Volver</a>
</body>
</html>
<?php include_once(__DIR__ . "/../structure/footer.php"); ?>
