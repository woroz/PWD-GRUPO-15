<?php
require_once __DIR__ . '/../../../controller/tp4/abmPersona.php';

$errores = [];
$mensaje = '';

$dni       = isset($_POST['dni']) ? trim($_POST['dni']) : '';
$nombre    = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$apellido  = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
$domicilio = isset($_POST['domicilio']) ? trim($_POST['domicilio']) : '';

if ($dni === '' || $nombre === '' || $apellido === '' || $domicilio === '') {
    $errores[] = "Debe completar todos los campos.";
} elseif (!ctype_digit($dni)) {
    $errores[] = "El DNI debe contener solo números.";
} else {
    $abm = new abmPersona();
    // Ajustá keys si tu controlador espera otras
    $ok = $abm->modificacion([
        'NroDni'   => $dni,
        'Nombre'   => $nombre,
        'Apellido' => $apellido,
        'Domicilio'=> $domicilio
    ]);
    if ($ok) {
        $mensaje = "✔️ Datos actualizados correctamente para el DNI $dni.";
    } else {
        $errores[] = "No se pudo actualizar la persona. Verificá las claves que espera ambPersona::modificacion.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado actualización</title>
  <style>
    .ok{background:#e7f6ed;border:1px solid #2f8f4e;color:#14532d;padding:12px;border-radius:8px}
    .err{background:#fde8e8;border:1px solid #d92c2c;color:#7f1d1d;padding:12px;border-radius:8px}
    .btn{display:inline-block;margin-top:16px;padding:8px 12px;border:1px solid #333;border-radius:8px;text-decoration:none;color:#111}
  </style>
</head>
<body>

<h2>Actualizar datos</h2>

<?php if ($mensaje): ?>
  <div class="ok"><?= $mensaje ?></div>
<?php endif; ?>

<?php if (!empty($errores)): ?>
  <div class="err">
    <strong>Ocurrieron errores:</strong>
    <ul><?php foreach ($errores as $e): ?><li><?= $e ?></li><?php endforeach; ?></ul>
  </div>
<?php endif; ?>

<a class="btn" href="../buscarPersona.html">⟵ Volver a buscar</a>

</body>
</html>
