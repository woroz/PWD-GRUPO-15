<?php include_once "../structure/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3,4,5,6</title>
</head>
<body>

    <form id="form3" name="form3" action="../action/verej2-3.php" method="get">
        <h3>Datos Personales</h3>
        <label for="nombre">Nombre:</label> <input type="text" name="nombre" id="nombre"><br>
        <label for="apellido">Apellido:</label> <input type="text" name="apellido" id="apellido"><br>
        <label for="edad">Edad:</label> <input type="text" name="edad" id="edad"><br>
        <label for="direccion">Direccion:</label> <input type="text" name="direccion" id="direccion"><br>
        <h3>Nivel de estudios</h3>
        <div id="estudios">
        <input type="radio" name="estudio" id="estudio" value="1">No tiene Estudios<br>
        <input type="radio" name="estudio" id="estudio" value="2">Estudios Primarios<br>
        <input type="radio" name="estudio" id="estudio" value="3">Estudios Secundarios
        </div>

        <h3>Sexo</h3>
        <div id="sexos">
        Masculino<input type="radio" name="sexo" value="masculino">
        Femenino<input type="radio" name="sexo" value="femenino">
        </div>

        <h3>Deportes que practica</h3>
        <div id="deportes">
        <input type="checkbox" name="deporte[]" value="futbol">Futbol<br>
        <input type="checkbox" name="deporte[]" value="basket">Basket<br>
        <input type="checkbox" name="deporte[]" value="tennis">Tennis<br>
        <input type="checkbox" name="deporte[]" value="voley">Voley
        </div>

        <input type="submit" value="Enviar">
    </form>
     <script src="../js/validacionej2-3.js"></script>
</body>
<?php include_once "../structure/footer.php"; ?>
</html>