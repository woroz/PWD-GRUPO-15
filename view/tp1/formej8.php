<?php include_once ("structure/header.php"); ?>

<form name="form1" method="get" action="./action/verej8.php" onsubmit = "return validarCine()">

    <label for="edad">Ingrese su edad:</label>
    <input name="edad" type="number" id="edad"/><br/>

    <p>Es estudiante?:</p>
    <select name="estudiante" id="estudiante">
        <option value="si" selected>SI</option>
        <option value="no">NO</option>
    </select><br><br>
    <input type="submit" name="Submit" value="Enviar"/>
</form>

<?php 
$scriptJS = "validarCine.js";
include_once "structure/footer.php"; ?>