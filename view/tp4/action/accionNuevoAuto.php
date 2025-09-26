<?php
include_once("../../../configuracion.php"); // incluye rutas/config
$datos = datasubmitted();

$encontrado = false;
$objAbmPersona = new abmPersona();
$objAbmAuto = new ambAuto();
$personas = $objAbmPersona->mostrarPersonas();
$nuevoAuto = $objAbmAuto->insertarAuto($datos);


foreach ($personas as $objPersona){
    if ($objPersona->getNroDni() == $datos['nroDni']){
        $encontrado = true; 
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Persona</title>
</head>
<body>
<?php if (($nuevoAuto != null) && ($encontrado)){ ?>
<h1>Auto registrado con éxito.</h1>
<br>
<table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>DNI del dueño</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nuevoAuto->getPatente(); ?></td>
                <td><?php echo $nuevoAuto->getMarca(); ?></td>
                <td><?php echo $nuevoAuto->getModelo(); ?></td>
                <td><?php echo $nuevoAuto->getObjPersona()->getNroDni(); ?></td>
            </tr>
        </tbody>
    </table>
    <br>
<?php } elseif (!$encontrado) { ?>
    <h1>Persona no encontrada.</h1>
    <a href="../nuevaPersona.php">
      <button type="button">Agregar Persona</button>
    </a>
<?php } elseif ($nuevoAuto == null) { ?>
    <h1>Este Auto ya está registrado.</h1>
<?php } ?>
</body>
</html>