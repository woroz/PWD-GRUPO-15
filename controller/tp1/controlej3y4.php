<?php 
class Persona {
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;

    public function __construct($nombre, $apellido, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = (int)$edad;
        $this->direccion = $direccion;
    }

    public function resumen() {
        return "Hola, yo soy {$this->nombre} {$this->apellido}, tengo {$this->edad} años y vivo en {$this->direccion}";
    }

    public function MandarMensaje() {
        $mensaje = "Hola, yo soy {$this->nombre} {$this->apellido}, tengo {$this->edad} años, vivo en {$this->direccion} y soy mayor de edad";
        if ($this->edad < 18) {
            $mensaje = "Hola, yo soy {$this->nombre} {$this->apellido}, tengo {$this->edad} años, vivo en {$this->direccion} y soy menor de edad";
        }
        return $mensaje;
    }
}