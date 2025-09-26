<?php
require_once __DIR__ . '/conector/basedatos.php';
require_once __DIR__ . '/persona.php';
class auto{
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $mensajeoperacion;
    public function __construct() {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objPersona = new Persona();
        $this->mensajeoperacion = "";
    }

    public function getPatente() {
        return $this->patente;
    }

    public function setPatente($patente) {
        $this->patente = $patente;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getObjPersona() {
        return $this->objPersona;
    }

    public function setObjPersona($objPersona) {
        $this->objPersona = $objPersona;
    }

    public function getMensajeoperacion() {
        return $this->mensajeoperacion;
    }

    public function setMensajeoperacion($mensajeoperacion) {
        $this->mensajeoperacion = $mensajeoperacion;

        return $this;
    }

    public function setear($patente, $marca, $modelo, $objPersona) {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjPersona($objPersona);
    }

    public function cargar() {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $persona = new Persona();
                    $persona->setNroDni($row['DniDuenio']);
                    $persona->cargar();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $persona);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeoperacion("Auto->cargar: " . $base->getError());
        }
        return $resp;
    }

// Insertar
    public function insertar($datos) {
        $base = new BaseDatos();
        $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) 
                VALUES (:patente, :marca, :modelo, :nroDni)";
        
        try {
            $stmt = $base->prepare($sql);
            $stmt->execute([
            ':patente'    => $datos['patente'],
            ':marca'  => $datos['marca'],
            ':modelo'    => $datos['modelo'],
            ':nroDni'  => $datos['nroDni'],
        ]);

        // Creo el dueño como Persona
        $objPersona = new Persona();
        $objPersona->setNroDni($datos['nroDni']);
        $objPersona->cargar(); // carga todos los datos desde la BD

        // Creo el Auto y le seteo la persona
        $objAuto = new Auto();
        $objAuto->setPatente($datos['patente']);
        $objAuto->setMarca($datos['marca']);
        $objAuto->setModelo($datos['modelo']);
        $objAuto->setObjPersona($objPersona);
            

        } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            // Este es el error de clave primaria duplicada
            return null; // o devolver un mensaje personalizado
        }
        throw $e; // otros errores los re-lanzamos
        }
        return $objAuto;
    }

    public function modificar() {
    $resp = false;
    $base = new BaseDatos();
    $objPersona = $this->getObjPersona(); 

    if (is_object($objPersona) && method_exists($objPersona, 'getNroDni')) {
        $dni = $objPersona->getNroDni();
    } else {
        $this->setMensajeoperacion("Error: Persona no válida.");
    }

    $sql = "UPDATE auto SET Marca='" . $this->getMarca() . "', Modelo='" . $this->getModelo() . "', DniDuenio='" . $dni . "' 
    WHERE Patente='" . $this->getPatente() . "'";

    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            $this->setMensajeoperacion("Auto->modificar: " . $base->getError());
        }
    } else {
        $this->setMensajeoperacion("Auto->modificar: " . $base->getError());
    }
    return $resp;
    }


    public function eliminar() {
        $resp = false;
        $base=new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente='" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeoperacion("Auto->eliminar: ".$base->getError());
            }
        } else {
            $this->setMensajeoperacion("Auto->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public function listar($parametro='') {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro != "") {
            $sql.='WHERE '.$parametro;
        }

        $res = $base->Ejecutar($sql);
        
        if($res>-1){
            if($res>0){
                while ($row = $base->Registro()){
                    $obj= new Auto();
                    $persona = new Persona();
                    $persona->setNroDni($row['DniDuenio']);
                    $persona->cargar();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $persona);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setMensajeoperacion("Auto->listar: ".$base->getError()); 
        }
        return $arreglo;
    }
 
}
?>