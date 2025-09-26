<?php
include_once('../../../controller/tp4/abmAuto.php');
include_once('../../../utils/datasubmitted.php');
$datos=datasubmitted();
$abmAuto=new ambAuto();
$autoBuscado=[];
$mensaje="";
if (isset($datos['patente'])) {
    $autoBuscado=$abmAuto->buscar(['Patente'=>$datos['patente']]);
    if (count($autoBuscado)>0) {
        $mensaje='<table>'.
        '<tr>'.
        '<th>Patente</th>'.
        '<th>Marca</th>'.
        '<th>Modelo</th>'.
        '<th>Nombre Titular</th>'.
        '<th>Apellido Titular</th>'.
        '</tr>';
        foreach ($autoBuscado as $unAuto) {
            $mensaje.='<tr>'.
            '<td>'.$unAuto['Patente'].'</td>'.
            '<td>'.$unAuto['Marca'].'</td>'.
            '<td>'.$unAuto['Modelo'].'</td>'.
            '<td>'.$unAuto['DniDuenio']['Nombre'].'</td>'.
            '<td>'.$unAuto['DniDuenio']['Apellido'].'</td>'.
            '</tr>';
        }
        $mensaje.='</table>';
    }else {
        $mensaje="<h2>No se encontro un auto con esa patente</h2>";
    }
}else {
    $mensaje="<h2>Error no se recibieron datos</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Buscado</title>
    <style>
    table{border-collapse: collapse;margin: 10px 0;}
    th,td{border: 1px solid black;padding: 5px;text-align: center;}
    </style>
</head>
<body>
    <a href="../buscarAuto.php">Volver atras</a>
    <h2>Auto Buscado</h2>
    <?php
    echo $mensaje;
    ?>
</body>
</html>