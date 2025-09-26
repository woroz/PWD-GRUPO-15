<?php
require_once __DIR__ . '/../../../controller/tp4/abmPersona.php';
require_once __DIR__ . '../../../../model/persona.php';

$errores = [];
$personaData = null;

$dni = isset($_POST['dni']) ? trim($_POST['dni']) : '';

if ($dni === '') {
    $errores[] = "Debe ingresar un DNI.";
} elseif (!ctype_digit($dni)) {
    $errores[] = "El DNI debe contener solo números.";
} else {
    $abm = new abmPersona();
    // Cambiá la KEY si tu controlador usa otra (p.ej. 'dni' o 'dniUsu')
    $res = $abm->buscar(['NroDni' => $dni]);

    if (is_array($res) && count($res) > 0) {
        $item = $res[0];

        if ($item instanceof Persona) {
            $personaData = [
                'NroDni'   => $item->getNroDni(),
                'Nombre'   => method_exists($item,'getNombre')   ? $item->getNombre()   : '',
                'Apellido' => method_exists($item,'getApellido') ? $item->getApellido() : '',
                'Domicilio'=> method_exists($item,'getDomicilio')? $item->getDomicilio(): '',
            ];
        } else {
            $personaData = [
                'NroDni'   => $item['NroDni']   ?? $dni,
                'Nombre'   => $item['Nombre']   ?? '',
                'Apellido' => $item['Apellido'] ?? '',
                'Domicilio'=> $item['Domicilio']?? '',
            ];
        }
    } else {
        $errores[] = "No se encontró ninguna persona con DNI $dni.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Buscar Persona</title>
  <style>
    .ok{background:#e7f6ed;border:1px solid #2f8f4e;color:#14532d;padding:12px;border-radius:8px}
    .err{background:#fde8e8;border:1px solid #d92c2c;color:#7f1d1d;padding:12px;border-radius:8px}
    .btn{display:inline-block;margin-top:16px;padding:8px 12px;border:1px solid #333;border-radius:8px;text-decoration:none;color:#111}
  </style>
</head>
<body>
<?php if (!empty($errores)): ?>
  <div class="err">
    <strong>Ocurrieron errores:</strong>
    <ul><?php foreach ($errores as $e): ?><li><?= $e ?></li><?php endforeach; ?></ul>
  </div>
  <a class="btn" href="../buscarPersona.html">⟵ Volver</a>

<?php elseif ($personaData): ?>
  <div class="ok">Persona encontrada. Redirigiendo al formulario de edición…</div>

  <!-- Auto-POST a solicitarDatosForm.php con los datos -->
  <form id="redir" action="../solicitarDatosForm.php" method="post">
    <input type="hidden" name="dni" value="<?= htmlspecialchars($personaData['NroDni']) ?>">
    <input type="hidden" name="nombre" value="<?= htmlspecialchars($personaData['Nombre']) ?>">
    <input type="hidden" name="apellido" value="<?= htmlspecialchars($personaData['Apellido']) ?>">
    <input type="hidden" name="domicilio" value="<?= htmlspecialchars($personaData['Domicilio']) ?>">
    <noscript>
      <p>JavaScript está deshabilitado. Presioná el siguiente botón:</p>
      <button type="submit">Continuar</button>
    </noscript>
  </form>
  <script>document.getElementById('redir').submit();</script>
<?php endif; ?>
</body>
</html>
