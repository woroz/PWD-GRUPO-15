<?php
class UserCinema {
    private $edad;
    private $estudiante;

    public function __construct($edad, $estudiante) {
        $this->edad = $edad;
        $this->estudiante = $estudiante;
    }

public function valorEntrada() {
    if ($this->edad < 12 || $this->estudiante == "si" && $this->edad < 12) {
        $precio = 160; 
    } elseif ($this->estudiante == "si" && $this->edad >= 12) {
        $precio = 180; 
    } else {
        $precio = 300; 
    }
    return $precio;
}

}