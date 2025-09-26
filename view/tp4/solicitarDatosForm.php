<?php
// Llega por POST desde accionBuscarPersona.php
$dni       = $_POST['dni']       ?? '';
$nombre    = $_POST['nombre']    ?? '';
$apellido  = $_POST['apellido']  ?? '';
$domicilio = $_POST['domicilio'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Persona</title>
  <style>
    label.error-message{color:#d00;font-size:.9rem;display:block;margin-top:4px}
    input.error{border-color:#d00}
  </style>
</head>
<body>
  <h2>Editar datos de persona</h2>

  <form action="action/accionSolicitarDatos.php" method="post" id="formSolicitarDatos" novalidate>
    <label for="dni">DNI:</label><br>
    <input type="text" id="dni" name="dni" value="<?= htmlspecialchars($dni) ?>" readonly><br><br>

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($nombre) ?>">
    <label id="error-nombre" class="error-message"></label><br><br>

    <label for="apellido">Apellido:</label><br>
    <input type="text" id="apellido" name="apellido" value="<?= htmlspecialchars($apellido) ?>">
    <label id="error-apellido" class="error-message"></label><br><br>

    <label for="domicilio">Domicilio:</label><br>
    <input type="text" id="domicilio" name="domicilio" value="<?= htmlspecialchars($domicilio) ?>">
    <label id="error-domicilio" class="error-message"></label><br><br>

    <input type="submit" value="Guardar cambios">
  </form>

  <a href="buscarPersona.html">⟵ Volver a buscar</a>

  <script src="js/datosSolicitados.js"></script>
</body>
</html>
