<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulario de Persona</title>
</head>
<body>
<h1>Formulario de Persona</h1>
<form id="formNuevaPersona" method="post" action="action/accionNuevaPersona.php">
<label for="nroDni">Nº de DNI:</label><br>
<input id="nroDni" name="nroDni" type="text"><br>
<span id="error-message-dni"></span><br>


<label for="apellido">Apellido:</label><br>
<input id="apellido" name="apellido" type="text"><br>
<span id="error-message-apellido"></span><br>


<label for="nombre">Nombre:</label><br>
<input id="nombre" name="nombre" type="text"><br>
<span id="error-message-nombre"></span><br>


<label for="fechaNac">Fecha de nacimiento:</label><br>
<input id="fechaNac" name="fechaNac" type="date"><br>
<span id="error-message-fechaNac"></span><br>


<label for="telefono">Teléfono:</label><br>
<input id="telefono" name="telefono" type="tel"><br>
<span id="error-message-telefono"></span><br>


<label for="domicilio">Domicilio:</label><br>
<textarea id="domicilio" name="domicilio"></textarea><br>
<span id="error-message-domicilio"></span><br>

<button type="submit">Enviar</button>
</form>
</body>
<script src="./js/nuevaPersona.js"></script>
</html>