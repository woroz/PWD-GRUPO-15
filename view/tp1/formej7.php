<?php include_once ("structure/header.php"); ?>

<form name="form1" method="get" action="./action/verej7.php" onsubmit = "return validarOperacion()">
  <label for="num1">Numero uno :</label>
  <input name="num1" type="number" id="num1"/><br/>

  <label for="num2">Numero dos :</label>
  <input name="num2" type="number" id="num2"/><br/>

  <p>Seleccione la operacion q quiere hacer:</p>
  <select name="operacion" id="operacion">
    <option value="suma" selected>SUMA</option>
    <option value="resta">RESTA</option>
    <option value="multiplicacion">MULTIPLICACION</option>
  </select><br><br>
  <input type="submit" name="Submit" value="Enviar"/>
</form>

<?php 
$scriptJS = "validarOperacion.js";
include_once "structure/footer.php"; ?>