<?php 
require_once __DIR__ . '/conector/basedatos.php';
require_once __DIR__ . '/persona.php';
class Persona {
    private $nroDni;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeOperacion;

    public function __construct() {
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
    }

    public function getNroDni(){ 
        return $this->nroDni; 
    }
    public function setNroDni($nroDni) { 
        $this->nroDni = $nroDni; 
    }

    public function getApellido() {
        return $this->apellido; 
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido; 
    }

    public function getNombre() {
        return $this->nombre; 
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre; 
    }

    public function getFechaNac() { 
        return $this->fechaNac; 
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac; 
    }

    public function getTelefono() { 
        return $this->telefono; 
    }

    public function setTelefono($telefono) { 
        $this->telefono = $telefono; 
    }

    public function getDomicilio() { 
        return $this->domicilio; 
    }

    public function setDomicilio($domicilio) { 
        $this->domicilio = $domicilio; 
    }

    public function getMensajeOperacion() { 
        return $this->mensajeOperacion; 
    
    }

    public function setMensajeOperacion($mensajeOperacion) {
        $this->mensajeOperacion = $mensajeOperacion; 
    }

    public function setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    public function cargar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeOperacion("Persona->cargar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
                VALUES ('".$this->getNroDni()."','".$this->getApellido()."','".$this->getNombre()."',
                        '".$this->getFechaNac()."','".$this->getTelefono()."','".$this->getDomicilio()."')";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->insertar: ".$base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->insertar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET Apellido='" . $this->getApellido() . "',
                                   Nombre='" . $this->getNombre() . "',
                                   Domicilio='" . $this->getDomicilio() . "',
                                   Telefono='" . $this->getTelefono() . "',
                                   fechaNac='"  . $this->getFechaNac() . "' 
                WHERE NroDni='" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni='" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public function listar($parametro = "") {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro != "") {
            $sql .= "WHERE " . $parametro;
        }
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $base->Registro()) {
                        $obj = new Persona();
                        $obj->setear($row['NroDni'], $row['Apellido'],$row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        array_push($arreglo, $obj);
                    }
                }
            }
        } else {
            $this->setMensajeOperacion("Persona->listar: " . $base->getError());
        }
        return $arreglo;
    }

}
