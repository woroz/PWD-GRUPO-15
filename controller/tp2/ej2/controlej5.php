<?php
class Estudio{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $sexo;
    private $estudio;

    public function __construct($nombre, $apellido, $edad, $direccion, $sexo, $estudio) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = (int)$edad;
        $this->direccion = $direccion;
        $this->sexo = $sexo;
        $this->estudio = $estudio;
    }

    public function PoseeEstudio(){
        $mensajeEstudio = "";
        if($this->estudio == 0){
            $mensajeEstudio = "no poseo estudios";
        }else if($this->estudio == 1){
            $mensajeEstudio = "poseo estudios primarios";
        }else{
            $mensajeEstudio = "poseo estudios secundarios";
        }

        $mensajeFinal=  "Mi nombre es {$this->nombre} y mi apellido {$this->apellido}, tengo {$this->edad}, vivo en {$this->direccion}, soy {$this->sexo} y $mensajeEstudio";
        return $mensajeFinal;
    }

}