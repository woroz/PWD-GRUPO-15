<?php
include_once("../../../configuracion.php"); // incluye rutas/config
$datos = datasubmitted();
$objAbmPersona = new AbmPersona();
$objNuevaPersona = $objAbmPersona->insertarPersona($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Persona</title>
    <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<body>
<?php if ($objNuevaPersona != null){ ?>
<div class="card-header bg-light">
<h1 align="center">Registrado con éxito.</h1>
</div>
<br>
<div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
<table class="table" border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Número DNI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Domicilio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $objNuevaPersona->getNroDni(); ?></td>
                <td><?php echo $objNuevaPersona->getApellido(); ?></td>
                <td><?php echo $objNuevaPersona->getNombre(); ?></td>
                <td><?php echo $objNuevaPersona->getFechaNac(); ?></td>
                <td><?php echo $objNuevaPersona->getTelefono(); ?></td>
                <td><?php echo $objNuevaPersona->getDomicilio(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="col-12 text-center">
<button type="button" class="btn btn-primary" onclick="history.back();">
    Volver
</button>
</div>
<?php }else{ ?>
    <div class="card-header bg-light">
    <h1 align="center">Algún dato no es válido o ya está registrado.</h1>
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