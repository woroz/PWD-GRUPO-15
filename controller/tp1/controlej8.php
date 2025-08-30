<?php
class UserCinema {
    private $edad;
    private $estudiante;

    public function __construct($edad, $estudiante) {
        $this->edad = (int) $edad;
        $this->estudiante = $estudiante;
    }

    public function valorEntrada() {
        $valor = 300;
        if ($this->edad >= 12 && $this->estudiante === 'si') {
           $valor = 180;
        } elseif ($this->edad < 12 || $this->estudiante === 'si'){
            $valor = 160;
        }
        return $valor;
    }
}