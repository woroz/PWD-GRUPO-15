<?php
class control {
    private $titulo;
    private $director;
    private $produccion;
    private $nacionalidad;
    private $duracion;
    private $actores;
    private $guion;
    private $anio;
    private $genero;
    private $restriccionesEdad;
    private $sinopsis;

    public function __construct($titulo, $director, $produccion, $nacionalidad, $duracion, $actores, $guion, $anio, $genero, $restriccionesEdad, $sinopsis) {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->produccion = $produccion;
        $this->nacionalidad = $nacionalidad;
        $this->duracion = (int)$duracion;
        $this->actores = $actores;
        $this->guion = $guion;
        $this->anio = (int)$anio;
        $this->genero = $genero;
        $this->restriccionesEdad = $restriccionesEdad;
        $this->sinopsis = $sinopsis;
    }

    public function Cinema() {
        return [
            'Título' => $this->titulo,
            'Director' => $this->director,
            'Producción' => $this->produccion,
            'Nacionalidad' => $this->nacionalidad,
            'Duración' => $this->duracion . ' minutos',
            'Actores' => $this->actores,
            'Guion' => $this->guion,
            'Año' => $this->anio,
            'Género' => $this->genero,
            'Restricciones de edad' => $this->restriccionesEdad,
            'Sinopsis' => $this->sinopsis
        ];
    }
}