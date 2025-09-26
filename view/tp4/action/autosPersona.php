<?php
require_once('../../../controller/tp4/abmPersona.php');
require_once('../../../controller/tp4/abmAuto.php');
include_once('../../../utils/datasubmitted.php');
$datos=datasubmitted();
$mensaje="";
$persona=null;
$autos=[];
if (isset($datos['NroDni'])) {
    $abmPersona=new AbmPersona();
    $personas=$abmPersona->buscar(["NroDni"=>$datos['NroDni']]);
    if (count($personas)>0) {
        $persona=$personas[0];
        $abmAuto=new ambAuto();
        $autos=$abmAuto->buscar(["DniDuenio"=>$persona['NroDni']]);

        if (count($autos)>0) {
            $mensaje="<h2>Autos de ".$persona['Nombre']." ".$persona['Apellido']."</h2>".
            '<table>'.
            '<tr>'.
            '<th>Patente</th>'.
            '<th>Marca</th>'.
            '<th>Modelo</th>'.
            '</tr>';
            foreach ($autos as $unAuto) {
                $mensaje.='<tr>'.
                '<td>'.$unAuto['Patente'].'</td>'.
                '<td>'.$unAuto['Marca'].'</td>'.
                '<td>'.$unAuto['Modelo'].'</td>'.
                '</tr>';
            }
            $mensaje.='</table>';
        }else {
            $mensaje="<h2>".$persona['Nombre']." ".$persona['Apellido']." no tiene autos cargados en la Base de Datos</h2>";
        }
    }else {
        $mensaje="<h2>No se encontro a la persona con ese dni</h2>";
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
    <title>Autos Persona</title>
    <style>
        table{border-collapse: collapse;margin: 10px 0;}
        th,td{border: 1px solid black;padding: 5px;text-align: center;}
    </style>
</head>
<body>
    <a href="../listaPersonas.php">Volver atras</a>
    <?php
    echo $mensaje;
    ?>
</body>
</html>