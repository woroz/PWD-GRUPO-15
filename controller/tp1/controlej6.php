<?php
class PersonaDeporte{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $sexo;
    private $estudio;
    private $deporte;

    public function __construct($nombre, $apellido, $edad, $direccion, $sexo, $estudio, $deporte = []) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = (int)$edad;
        $this->direccion = $direccion;
        $this->sexo = $sexo;
        $this->estudio = $estudio;
        $this->deporte = $deporte;
    }

public function PoseeEstudioDeporte(){
    $mensajeEstudio = "";
    if($this->estudio == 0){
        $mensajeEstudio = "no poseo estudios";
    } else if($this->estudio == 1){
        $mensajeEstudio = "poseo estudios primarios";
    } else {
        $mensajeEstudio = "poseo estudios secundarios";
    }

    $mensajeDeportes = "No practico deportes";
    if(!empty($this->deporte)){
        $cantidad = count($this->deporte);
        $mensajeDeportes = "practico: $cantidad deportes";
    }

    $mensajeFinal = "Mi nombre es {$this->nombre} y mi apellido {$this->apellido}, tengo {$this->edad} años, vivo en {$this->direccion}, soy {$this->sexo}, $mensajeEstudio y $mensajeDeportes.";
    return $mensajeFinal;
}


}