<?php include_once ("../structure/header.php"); ?>
<main>

<form id="form1" name="form1" method="post" action="../action/verej1.php">
 <label for="numero">Ingrese un numero:</label>
  <input type="number" id="numero" name="numero" required>
<br/>
<input type = "submit" name = "Submit" value = "Enviar"/>
</form>
</main>

<?php 
$scriptJS = "validarnumero.js";
include_once "../structure/footer.php"; ?>


