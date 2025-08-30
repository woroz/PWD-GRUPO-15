<?php include_once ("structure/header.php"); ?>

<form name = "form2" method = "get" action = "./action/verej2.php" onsubmit = "return validarHoras()">
Lunes: <input name = "lunes" type = "number" id = "lunes"/> <br/>
martes: <input name = "martes" type = "number" id = "martes"/> <br/>
miercoles: <input name = "miercoles" type = "number" id = "miercoles"/> <br/>
jueves: <input name = "jueves" type = "number" id = "jueves"/> <br/>
viernes: <input name = "viernes" type = "number" id = "viernes"/> <br/>
<input type = "submit" name = "Submit" value = "Enviar"/>

<?php 
$scriptJS = "validardia.js";
include_once "structure/footer.php"; ?>