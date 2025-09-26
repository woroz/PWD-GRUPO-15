<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscarAuto</title>
    <link rel="stylesheet" href="./css/buscarAuto.css">
</head>
<body>
    <form action="./action/accionBuscarAuto.php" method="post" onsubmit="return validar()">
        <h2>Busqueda de Auto</h2>
        <label for="patente">Ingrese numero de Patente: </label>
        <input type="text" name="patente" id="patente">
        <input type="submit" value="Enviar" id="enviar">
    </form>
    <script src="./js/buscarAuto.js"></script>
</body>
</html>