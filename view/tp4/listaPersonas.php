<?php
include_once('../../controller/tp4/abmPersona.php');
$objAbmPersona=new AbmPersona;
$personas=$objAbmPersona->buscar(null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Personas</title>
    <style>
    table{border-collapse: collapse;margin: 10px 0;}
    th,td{border: 1px solid black;padding: 5px;text-align: center;}
    </style>
</head>
<body>
    <h2>Listado de Personas</h2>
    <?php
    if (count($personas)>0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Dni</th>';
        echo '<th>Nombre</th>';
        echo '<th>Apellido</th>';
        echo '<th>Fecha Nacimiento</th>';
        echo '<th>Telefono</th>';
        echo '<th>Domicilio</th>';
        echo '<th>Autos asociados</th>';
        echo '</tr>';
        foreach ($personas as $p) {
            echo '<tr>';
            echo '<td>'.$p['NroDni'].'</td>';
            echo '<td>'.$p['Nombre'].'</td>';
            echo '<td>'.$p['Apellido'].'</td>';
            echo '<td>'.$p['fechaNac'].'</td>';
            echo '<td>'.$p['Telefono'].'</td>';
            echo '<td>'.$p['Domicilio'].'</td>';
            echo '<td><a href="../tp4/action/autosPersona.php?NroDni='.$p['NroDni'].'">Ver autos</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    }else {
        echo "<h2>No se encontraron personas cargadas en la Base de Datos</h2>";
    }
    ?>
</body>
</html>