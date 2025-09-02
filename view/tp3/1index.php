<?php
include_once 'structure/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario subir archivo</title>
    <link href="/../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height:60vh;">
    <form method="POST" action="action/1actionArchivo.php" enctype="multipart/form-data">
        <div class="col-md-12">
        <div class="mb-3">
        <label for="formFileSm" class="form-label">Ingresar el archivo:</label>
        <input name="miArchivo" id="miArchivo" type="file" class="form-control form-control-sm" />
        <br>
        <input class="btn btn-primary" type='submit' value='Enviar'/>
        </div>
        </div>
    </form>
    </div>
</body>
</html>

<?php
include_once 'structure/footer.php';
?>