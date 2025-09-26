<?php
// ¡NO TOCAR ESTA RUTA!
require_once __DIR__ . '/../../../controller/tp4/abmPersona.php';

$errores = [];
$mensaje = '';

$dni       = trim($_POST['dni']       ?? '');
$nombre    = trim($_POST['nombre']    ?? '');
$apellido  = trim($_POST['apellido']  ?? '');
$domicilio = trim($_POST['domicilio'] ?? '');

if ($dni === '' || $nombre === '' || $apellido === '' || $domicilio === '') {
    $errores[] = "Debe completar todos los campos.";
} elseif (!ctype_digit($dni)) {
    $errores[] = "El DNI debe contener solo números.";
} else {
    // Tu clase se llama AbmPersona (con A mayúscula)
    $abm = new AbmPersona();

    // 1) Traer el registro actual para completar los campos obligatorios
    $res = $abm->buscar(['NroDni' => $dni]);   // tu buscar usa 'NroDni'
    if (!is_array($res) || count($res) === 0) {
        $errores[] = "No existe una persona con DNI $dni.";
    } else {
        $act = $res[0]; // AbmPersona::buscar devuelve array asociativo

        // 2) Modificar pasando TODAS las claves que exige cargarObjeto()
        $ok = $abm->modificacion([
            'NroDni'   => $dni,
            'Apellido' => $apellido,
            'Nombre'   => $nombre,
            'fechaNac' => $act['fechaNac'],   // conservar valores actuales
            'Telefono' => $act['Telefono'],
            'Domicilio'=> $domicilio
        ]);

        if ($ok) {
            $mensaje = "✔️ Datos actualizados correctamente para el DNI $dni.";
        } else {
            $errores[] = "No se pudo actualizar la persona. Verificá las claves que espera AbmPersona::modificacion.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar datos</title>
  <style>
    body{font-family:system-ui,-apple-system,Roboto,Arial;margin:30px}
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
