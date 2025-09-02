<?php include_once "../structure/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

    <form name="form8" id="form8" action="../action/verej8.php" method="get">
        <label for="edad">Edad: </label><input type="number" name="edad" id="edad"><br>
        <label>Estudiante?</label>
        <div class="grupo-radio">
        <label for="si">Si</label><input type="radio" name="estudiante" id="si" value="si">
        <label for="no">No</label><input type="radio" name="estudiante" id="no" value="no"><br>
        </div>

        <input type="reset" value="Borrar">
        <input type="submit" value="Enviar">
    </form>

</body>
   <script src="../js/validacionej8.js"></script>
<?php include_once "../structure/footer.php"; ?>
</html>