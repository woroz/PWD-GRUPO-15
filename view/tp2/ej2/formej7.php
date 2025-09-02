<?php include_once "../structure/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <form id="form7" name="form7" action="../action/verej7.php" method="get">
        Operando 1<input type="text" name="operando1" id="operando1"><br>
        Operando 2<input type="text" name="operando2" id="operando2"><br>
        <select name="select" id="select">
            <option value="">Seleccione una operación</option>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>

   <script src="../js/validacionej7.js"></script>
<?php include_once "../structure/footer.php"; ?>
</html>
