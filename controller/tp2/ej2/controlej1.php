<?php
class Numero {
    private $num;
    public function __construct($num) {
        $this->num = $num;
    }

    public function Tipo() {
        $res = "El numero " . $this->num . " es positivo";
        if ($this->num < 0) {
           $res = "El numero " . $this->num . " es negativo";
        } else {
              if ($this->num == 0) {
                $res = "El numero " . $this->num . " es 0";
              }
        }
        return $res;
    }
}