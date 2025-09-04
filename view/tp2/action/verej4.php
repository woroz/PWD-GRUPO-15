<?php
include_once("../structure/header.php"); 
include_once("../../../controller/tp2/ej4/controlej4.php");
include_once("../../../utils/datasubmitted.php");

$datos = datasubmitted();

$obj = new control(
    $datos['titulo'],
    $datos['director'],
    $datos['produccion'],
    $datos['nacionalidad'],
    $datos['duracion'],
    $datos['actores'],
    $datos['guion'],
    $datos['anio'],
    $datos['genero'],
    $datos['restricciones'],
    $datos['sinopsis']
);

$datosPelicula = $obj->Cinema();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/verej4.css">
</head>
<body>

<div class="container my-5">
    <div class="movie-info-box">
        <h2 class="text-secondary mb-4">La película introducida es</h2>
            <?php foreach ($datosPelicula as $etiqueta => $valor): ?>
                <p><strong><?= ($etiqueta) ?>:</strong> <?= ($valor) ?></p>
            <?php endforeach; ?>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <a href="../ej4/formej4.php" class="btn btn-primary">Volver</a>
    </div>

</div>
</body>
</html>
<?php include_once("../structure/footer.php"); ?>
