<?php
require_once __DIR__ . '/../../controller/tp4/abmAuto.php';

$controlAuto = new ambAuto();
$autos = $controlAuto->buscar(null); // Trae todos los autos
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Autos</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { text-align: center; }
        p { text-align: center; }
    </style>
</head>
<body>
    <h1>Autos Registrados</h1>

    <?php if (count($autos) > 0): ?>
        <table>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Dueño</th>
            </tr>
            <?php foreach ($autos as $auto): ?>
                <tr>
                    <td><?= $auto['Patente']; ?></td>
                    <td><?= $auto['Marca']; ?></td>
                    <td><?= $auto['Modelo']; ?></td>
                    <td><?= $auto['DniDuenio']['Nombre'] . ' ' . $auto['DniDuenio']['Apellido']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hay autos cargados en la base de datos.</p>
    <?php endif; ?>

</body>
</html>
