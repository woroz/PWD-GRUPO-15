<?php
class HorasSemana {
    private $lunes;
    private $martes;
    private $miercoles;
    private $jueves;
    private $viernes;

    public function __construct($lunes, $martes, $miercoles, $jueves, $viernes) {
        $this->lunes = (int)$lunes;
        $this->martes = (int)$martes;
        $this->miercoles = (int)$miercoles;
        $this->jueves = (int)$jueves;
        $this->viernes = (int)$viernes;
    }

    public function totalHoras() {
        return $this->lunes + $this->martes + $this->miercoles + $this->jueves + $this->viernes;
    }
}
?>
