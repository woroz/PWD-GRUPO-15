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
        <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<body>
<?php if (($nuevoAuto != null) && ($encontrado)){ ?>
<div class="card-header bg-light">
<h1 align="center" >Auto registrado con éxito.</h1>
</div>
<br>
<div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
<table class="table" border="1" cellpadding="5" cellspacing="0">
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
</div>
    <div class="col-12 text-center">
<button type="button" class="btn btn-primary" onclick="history.back();">
    Volver
</button>
</div>
<?php } elseif (!$encontrado) { ?>
    <div class="card-header bg-light">
    <h1 align="center" >Persona no encontrada.</h1>
    </div>
    <br><br>
    <div class="col-12 text-center">
    <a href="../nuevaPersona.php">
      <button type="button" class="btn btn-secondary">Agregar Persona</button>
    </a>
    </div>
    <br>
    <div class="col-12 text-center">
    <button type="button" class="btn btn-primary" onclick="history.back();">
        Volver
    </button>
    </div>
<?php } elseif ($nuevoAuto == null) { ?>
    <div class="card-header bg-light">
    <h1 align="center" >Este Auto ya está registrado.</h1>
    </div>
    <br><br>
    <div class="col-12 text-center">
    <button type="button" class="btn btn-secondary" onclick="history.back();">
        Volver
    </button>
    </div>
<?php } ?>
</body>
</html>