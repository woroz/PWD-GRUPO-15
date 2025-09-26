<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Dueño</title>
    <style>
        label.error-message {
            color: red;
            font-size: 0.9rem;
            display: block;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <h2>Cambiar Dueño</h2>

    <form action="action/accionCambioDuenio.php" method="post" name="formCambioDueno" id="formCambioDueno">
        <label for="patente">Patente:</label><br>
        <input type="text" id="patente" name="patente" maxlength="10">
        <label id="error-message-patente" class="error-message"></label>
        <br><br>

        <label for="docNuevoDueno">Documento del nuevo dueño:</label><br>
        <input type="text" id="docNuevoDueno" name="docNuevoDueno">
        <label id="error-message-dni" class="error-message"></label>
        <br><br>

        <input type="submit" value="Cambiar Dueño">
    </form>

    <script src="js/cambioDuenio.js"></script>
</body>
</html>
