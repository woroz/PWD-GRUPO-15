<?php
include_once 'structure/header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cine</title>
    <link rel="stylesheet" href="css/form-cine.css" />
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/validacionCine.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-light text-primary">
                <h2 class="card-title">🎬 Cinem@s</h2>
            </div>
            <div class="card-body">
                <form id="formCine" method="post" action="action/3datosCine.php" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="titulo" class="form-label"><strong>Título</strong></label>
                            <input type="text" class="form-control" id="titulo" name="titulo">
                            <div style="color: red;" id="error-message-titulo"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="actores" class="form-label"><strong>Actores</strong></label>
                            <input type="text" class="form-control" id="actores" name="actores">
                            <div style="color: red;" id="error-message-actores"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="director" class="form-label"><strong>Director</strong></label>
                            <input type="text" class="form-control" id="director" name="director">
                            <div style="color: red;" id="error-message-director"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="guion" class="form-label"><strong>Guion</strong></label>
                            <input type="text" class="form-control" id="guion" name="guion">
                            <div style="color: red;" id="error-message-guion"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="produccion" class="form-label"><strong>Producción</strong></label>
                            <input type="text" class="form-control" id="produccion" name="produccion">
                            <div style="color: red;" id="error-message-produccion"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="anio" class="form-label"><strong>Año</strong></label>
                            <input type="number" class="form-control" id="anio" name="anio">
                            <div style="color: red;" id="error-message-anio"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nacionalidad" class="form-label"><strong>Nacionalidad</strong></label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                            <div style="color: red;" id="error-message-nacionalidad"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="genero" class="form-label"><strong>Género</strong></label>
                            <select class="form-control" id="genero" name="genero">
                                <option value="">Seleccione un género</option>
                                <option value="comedia">Comedia</option>
                                <option value="terror">Terror</option>
                                <option value="misterio">Misterio</option>
                            </select>
                            <div style="color: red;" id="error-message-select"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="duracion" class="form-label"><strong>Duración</strong></label>
                            <input type="number" class="form-control" id="duracion" name="duracion" max="999" min="0">
                            <small class="form-text text-muted">(minutos)</small>
                            <div style="color: red;" id="error-message-duracion"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Restricciones de edad</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="restriccion" value="todo_publico"
                                    >
                                <label class="form-check-label">Todo público</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="restriccion" value="mayores_7"
                                    >
                                <label class="form-check-label">Mayores de 7 años</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="restriccion" value="mayores_18"
                                    >
                                <label class="form-check-label">Mayores de 18 años</label>
                            </div>
                            <div style="color: red;" id="error-message-restriccion"></div>
                        </div>
                    </div>
                    <br>
                    <div>
                        Ingresa el archivo: <input name="miArchivo" id="miArchivo" type="file"/>
                        <div style="color: red;" id="error-message-archivo"></div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-secondary">Borrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/validacionCine.js"></script>
</html>

<?php
include_once 'structure/footer.php';
?>