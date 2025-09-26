<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
<link rel="stylesheet" href="css/Registro.css">
<title>Formulario de Persona</title>
</head>
<body>
<div class="card-header bg-light">
<h1 align="center">Nueva Persona</h1>
</div>
<br><br>
<div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
<form class="form-group row w-100" id="formNuevaPersona" method="post" action="action/accionNuevaPersona.php">

<div class="col-md-6">
<div class="mb-3">
<label for="nroDni">Nº de DNI:</label><br>
<input class="form-control" id="nroDni" name="nroDni" type="text">
<span id="error-message-dni" style="color: red" ></span><br>
</div>

<div class="mb-3">
<label for="apellido">Apellido:</label><br>
<input class="form-control" id="apellido" name="apellido" type="text">
<span id="error-message-apellido" style="color: red"></span><br>
</div>

<div class="mb-3">
<label for="nombre">Nombre:</label><br>
<input class="form-control" id="nombre" name="nombre" type="text">
<span id="error-message-nombre" style="color: red"></span><br>
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
<label for="fechaNac">Fecha de nacimiento:</label><br>
<input class="form-control" id="fechaNac" name="fechaNac" type="date">
<span id="error-message-fechaNac" style="color: red"></span><br>
</div>

<div class="mb-3">
<label for="telefono">Teléfono:</label><br>
<input class="form-control" id="telefono" name="telefono" type="tel">
<span id="error-message-telefono" style="color: red"></span><br>
</div>

<div class="mb-3">
<label for="domicilio">Domicilio:</label><br>
<textarea class="form-control" id="domicilio" name="domicilio"></textarea>
<span id="error-message-domicilio" style="color: red"></span><br>
</div>
</div>

<div class="col-12 text-right">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
</div>
</body>
<script src="./js/nuevaPersona.js"></script>
</html>
