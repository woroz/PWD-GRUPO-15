<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Formulario - Registrar Auto</title>
  <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/Registro.css">
</head>
<body>
  <div class="card-header bg-light">
  <h1 align="center" >Registrar Auto</h1>
  </div>
<br><br>
  <div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
  <form class="form-group row w-100" id="formNuevoAuto" method="post" action="action/accionNuevoAuto.php">

    <!-- Datos del auto -->
    <fieldset>
      <legend align="center" ><b><u>Datos del Auto</u></b></legend>
      <br>
<div class="mb-3">
      <label for="patente">Patente:</label><br>
      <input class="form-control" id="patente" name="patente" maxlength="10">
      <span id="error-message-patente" style="color: red"></span><br>
</div>
<div class="mb-3">
      <label for="marca">Marca:</label><br>
      <input class="form-control" id="marca" name="marca" maxlength="100">
      <span id="error-message-marca" style="color: red"></span><br>
</div>
<div class="mb-3">
      <label for="modelo">Modelo:</label><br>
      <input class="form-control" id="modelo" name="modelo" maxlength="100">
      <span id="error-message-modelo" style="color: red"></span><br>
</div>
<div class="mb-3">
      <label for="nroDni">Nº DNI dueño:</label><br>
      <input class="form-control" id="nroDni" name="nroDni" maxlength="10" pattern="\d+" title="Solo números">
      <span id="error-message-nroDni" style="color: red"></span><br>
</div>
    </fieldset>

    <br><br>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  </div>
<br>
</body>
<script src="./js/nuevoAuto.js"></script>
</html>
