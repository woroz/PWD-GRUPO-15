<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Formulario - Registrar Auto</title>
</head>
<body>
  <h1>Registrar Auto</h1>

  <form id="formNuevoAuto" method="post" action="action/accionNuevoAuto.php">

    <!-- Datos del auto -->
    <fieldset>
      <legend>Datos del Auto</legend>

      <label for="patente">Patente:</label><br>
      <input id="patente" name="patente" maxlength="10">
      <br>
      <span id="error-message-patente"></span><br>

      <label for="marca">Marca:</label><br>
      <input id="marca" name="marca" maxlength="100">
      <br>
      <span id="error-message-marca"></span><br>

      <label for="modelo">Modelo:</label><br>
      <input id="modelo" name="modelo" maxlength="100">
      <br>
      <span id="error-message-modelo"></span><br>

      <label for="nroDni">Nº DNI dueño:</label><br>
      <input id="nroDni" name="nroDni" maxlength="10" pattern="\d+" title="Solo números">
      <br>
      <span id="error-message-nroDni"></span><br>
    </fieldset>

    <br>
    <button type="submit">Guardar</button>
  </form>
<br>
</body>
<script src="./js/nuevoAuto.js"></script>
</html>
