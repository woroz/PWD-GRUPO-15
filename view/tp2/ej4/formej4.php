<?php include_once "../structure/header.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cinem@as</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleej4.css">
    <script 
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.4/dist/jquery.validate.min.js"></script>
</head>
<body>

<div class="container my-5">
    <div class="card p-4 shadow">
        <h2 class="card-title text-center mb-4">Cinem@as</h2>
        <form id="formcine" action="../action/verej4.php" method="post">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                    </div>
                    <div class="mb-3">
                        <label for="produccion" class="form-label">Producción</label>
                        <input type="text" class="form-control" id="produccion" name="produccion" placeholder="Producción">
                    </div>
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad">
                    </div>
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="number" class="form-control" id="duracion" name="duracion" placeholder="(minutos)">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores">
                    </div>
                    <div class="mb-3">
                        <label for="guion" class="form-label">Guión</label>
                        <input type="text" class="form-control" id="guion" name="guion" placeholder="Guión">
                    </div>
                    <div class="mb-3">
                        <label for="anio" class="form-label">Año</label>
                        <input type="number" class="form-control" id="anio" name="anio" placeholder="Año">
                    <div class="mb-3">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-control" id="genero" name="genero">
                            <option value="">Seleccione un genero</option>
                            <option value="comedia">Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romanticas">Romanticas</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otras">Otras</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="restricciones" class="form-label">Restricciones de edad</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restricciones" id="todoPublico" value="Todo Público" checked>
                                <label class="form-check-label" for="todoPublico">Todo Público</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restricciones" id="mayores7" value="Mayores de 7 años">
                                <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restricciones" id="mayores18" value="Mayores de 18 años">
                                <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4"></textarea>
                    </div>
                </div>

                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary me-2">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../js/validacionej4.js"> </script>
<?php include_once "../structure/footer.php"; ?>
</body>
</html>