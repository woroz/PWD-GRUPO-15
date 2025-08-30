<?php include_once ("structure/header.php"); ?>

<form name="form3" method="get" action="./action/verej3.php" onsubmit = "return validarnombre()">
  <label for="nombre">Nombre:</label>
  <input name="nombre" type="text" id="nombre"/><br/>

  <label for="apellido">Apellido:</label>
  <input name="apellido" type="text" id="apellido"/><br/>

  <label for="edad">Edad:</label>
  <input name="edad" type="number" id="edad"/><br/>

  <label for="direccion">Dirección:</label>
  <input name="direccion" type="text" id="direccion"/><br/>

  <input type="submit" name="Submit" value="Enviar"/>
</form>

<?php 
$scriptJS = "validarnombre.js";
include_once "structure/footer.php"; ?>