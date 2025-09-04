<?php 
include_once __DIR__ . "/../structure/header.php";
require_once __DIR__ . "/../../../controller/tp2/ej2/controlej1.php";
include_once __DIR__ . "/../../../utils/datasubmitted.php";


$datos = datasubmitted();

$obj = new Numero($datos['numero']);

$mensaje = $obj->tipo();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver numero</title>
</head>
<body>
    <h1>Ver numero ingresado</h1>
    <p><?php echo "El numero ingresado es " . $mensaje; ?></p>
    <a href="../ej2/formej1.php">Volver a intentar</a>
</body>
</html>
<?php include_once(__DIR__ . "/../structure/footer.php"); ?>
