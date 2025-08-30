<?php include_once ("structure/header.php"); ?>
<main>

<form name = "form1" method = "post" action = "./action/verej1.php" onsubmit = "return validarNumero()">
 <label for="numero">Ingrese un numero:</label>
  <input type="number" id="numero" name="numero" required>
<br/>
<input type = "submit" name = "Submit" value = "Enviar"/>
</form>
</main>

<?php 
$scriptJS = "validarnumero.js";
include_once "structure/footer.php"; ?>


