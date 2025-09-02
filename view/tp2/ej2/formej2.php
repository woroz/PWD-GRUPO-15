<?php include_once "../structure/header.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario Semanal</title>
<body>

<h3>Formulario Semanal</h3>

<form name="form2" id="form2" method="get" action="../action/verej2.php">
    <label for="lunes">Lunes:</label>
    <input name="lunes" type="number" id="lunes"/> <br/><br/>

    <label for="martes">Martes:</label>
    <input name="martes" type="number" id="martes"/> <br/><br/>

    <label for="miercoles">Miércoles:</label>
    <input name="miercoles" type="number" id="miercoles"/> <br/><br/>

    <label for="jueves">Jueves:</label>
    <input name="jueves" type="number" id="jueves"/> <br/><br/>

    <label for="viernes">Viernes:</label>
    <input name="viernes" type="number" id="viernes"/> <br/><br/>

    <input type="submit" name="Submit" value="Enviar"/>
</form>

<script src="../js/validacionej2.js"></script>
<?php include_once "../structure/footer.php"; ?>
</head>
</body>
</html>

