<?php 
class Operacion {
    private $num1;
    private $num2;
    private $operacion;

    public function __construct($num1, $num2, $operacion) {
        $this->num1 = (int)$num1;
        $this->num2 = (int)$num2;
        $this->operacion = $operacion;

    }

    public function operacion() {
        $resultado = 0;
        if ($this->operacion == 'suma') {
            $resultado = $this->num1 + $this->num2;
        } elseif ($this->operacion == 'resta') {
            $resultado = $this->num1 - $this->num2;
        } else {
            $resultado = $this->num1 * $this->num2;
        }
        return $resultado;
    }

}