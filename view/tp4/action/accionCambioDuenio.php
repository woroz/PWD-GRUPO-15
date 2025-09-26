<?php
require_once __DIR__ . '../../../../controller/tp4/abmAuto.php';
require_once __DIR__ . '../../../../controller/tp4/abmPersona.php';

$mensaje = "";
$errores = [];

$patente = isset($_POST['patente']) ? trim($_POST['patente']) : '';
$dniNuevoDueno = isset($_POST['docNuevoDueno']) ? trim($_POST['docNuevoDueno']) : '';

if ($patente === '' || $dniNuevoDueno === '') {
    $errores[] = "Debe completar todos los campos.";
} else {
    $persona = new Persona();
    $persona->setNroDni($dniNuevoDueno);
    $personaExiste = $persona->cargar();

    if (!$personaExiste) {
        $errores[] = "No existe una persona con el documento $dniNuevoDueno.";
    } else {
        $abmAuto = new ambAuto();
        $resultado = $abmAuto->buscar(['Patente' => $patente]);

        if (count($resultado) === 0) {
            $errores[] = "No se encontró un auto con la patente $patente.";
        } else {
          
            $auto = $resultado[0];
            $marca = $auto['Marca'];
            $modelo = $auto['Modelo'];

            
            $cambio = $abmAuto->modificacion([
                'Patente'   => $patente,
                'Marca'     => $marca,
                'Modelo'    => $modelo,
                'DniDuenio' => $dniNuevoDueno
            ]);

            if ($cambio) {
                $mensaje = " El cambio de dueño se realizó correctamente.<br>
                La patente <strong>$patente</strong> ahora pertenece al documento <strong>$dniNuevoDueno</strong>.";
            } else {
                $errores[] = "No se pudo realizar el cambio de dueño.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Cambio de Dueño</title>
    <style>
        body {
            font-family: system-ui, -apple-system, Roboto, Arial;
            margin: 30px;
        }
        .ok {
            background: #e7f6ed;
            border: 1px solid #2f8f4e;
            color: #14532d;
            padding: 12px;
            border-radius: 8px;
        }
        .error {
            background: #fde8e8;
            border: 1px solid #d92c2c;
            color: #7f1d1d;
            padding: 12px;
            border-radius: 8px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            color: #111;
            border: 1px solid #444;
        }
        .btn:hover {
            background: #f1f1f1;
        }
        ul {
            margin-top: 8px;
        }
    </style>
</head>
<body>

<?php if (!empty($mensaje)): ?>
    <div class="ok"><?= $mensaje ?></div>
<?php endif; ?>

<?php if (!empty($errores)): ?>
    <div class="error">
        <strong>Ocurrieron errores:</strong>
        <ul>
        <?php foreach ($errores as $err): ?>
            <li><?= $err ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<a class="btn" href="../cambioDuenio.php">⟵ Volver</a>

</body>
</html>
