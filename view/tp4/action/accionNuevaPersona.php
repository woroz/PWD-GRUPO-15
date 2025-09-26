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
</head>
<body>
<?php if ($objNuevaPersona != null){ ?>
<h1>Registrado con éxito.</h1>
<br>
<table border="1" cellpadding="5" cellspacing="0">
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
<?php }else{ ?>
    <h1>Algún dato no es válido o ya está registrado.</h1>
<?php } ?>
</body>
</html>