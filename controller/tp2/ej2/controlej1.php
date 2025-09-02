<?php
class Numero {
    private $valor;

    public function __construct($valor) {
        $this->valor = (int) $valor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function tipo() {
      $nro = "Incorrecto";
      $num = $this->getValor();
        if ($num === 0) {
          $nro = "cero";
        } elseif ($num > 0) {
          $nro = "positivo";
        } else {
          $nro = "negativo";
        }
        return $nro;
    }
}