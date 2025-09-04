<?php
include_once("../structure/header.php"); 
include_once("../../../controller/tp2/ej3/controlej3.php");
include_once("../../../utils/datasubmitted.php");

$datos = datasubmitted();

$obj = new Login(
    $datos['user'],
    $datos['password']
);

$loginMessage = $obj->validarUser();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container my-5">
    <div class="movie-info-box">
        <?php if ($loginMessage === "Acceso denegado"): ?>
            <p class="text-danger"><strong><?= $loginMessage ?></strong></p>
        <?php else: ?>
            <p class="text-success"><strong><?= $loginMessage ?> - Bienvenido <?= ($datos['user']) ?></strong></p>
        <?php endif; ?>
    </div>
</div>
  <div class="d-flex justify-content-center mt-4">
        <a href="../ej3/formej3.php" class="btn btn-primary">Volver</a>
    </div>
</body>
</html>

<?php include_once("../structure/footer.php"); ?>
