<?php include_once ("structure/header.php"); ?>

  <form action="./action/verej5.php" method="post" onsubmit = "return validarEstudios()">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" >
    <br><br>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" >
    <br><br>

    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad" >
    <br><br>

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" >
    <br><br>

    <label for="sinestudios">No estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="0" >
    <label for="conestudios">Primario</label>
    <input type="radio" name="estudios" id="primario" value="1">
    <label for="secundario">Secundario</label>
    <input type="radio" name="estudios" id="secundario" value="2">
    <br>
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" id="mujer" value="mujer">
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" id="hombre" value="hombre" >

    <input type="submit" name="enviar" id="enviar">

  </form>

<?php 
$scriptJS = "validarEstudios.js";
include_once "structure/footer.php"; ?>