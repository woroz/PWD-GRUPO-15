<?php include_once(__DIR__ . "/../structure/header.php");
include_once(__DIR__ . "/../../../controller/tp2/ej2/controlej2-3.php");
include_once(__DIR__. "/../../../utils/datasubmitted.php");

$datos = datasubmitted();

$persona = new Persona(
    $datos['nombre'],
    $datos['apellido'],
    $datos['edad'],
    $datos['direccion'],
    $datos['estudio'],
    $datos['sexo'],
    $datos['deporte']
);
$mensaje = $persona->MostrarMensaje();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <p><?= $mensaje; ?></p>
    <a href="../ej2/formej3.php">Volver</a>
</body>

</html>
<?php include_once(__DIR__ . "/../structure/footer.php"); ?>