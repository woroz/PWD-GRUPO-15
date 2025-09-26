<?php
require_once __DIR__ . '/../../model/auto.php';
require_once __DIR__ . '/../../model/persona.php';
class ambAuto {
    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * @param array $param
    * @return Tabla
    */
    private function cargarObjetoConClave ($param) {
        $obj = null;
        if (isset ($param['Patente'])) {
            $obj = new Auto();
            $obj->setPatente($param['Patente']);
            $obj->cargar();
        }
        return $obj;
    }
    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    * @param array $param
    * @return Tabla
    */
    private function cargarObjeto ($param) {
        $obj = null;
        if (
            array_key_exists('Patente', $param) && array_key_exists('Marca', $param) &&
            array_key_exists('Modelo', $param) && array_key_exists('DniDuenio', $param)
            ) {
            $objPersona = new Persona ();
            $objPersona->setNroDni($param['DniDuenio']);
            $objPersona->cargar();

            $obj = new Auto ();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $objPersona);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }

    /**
    * permite cargar un objeto
    * @param array $param
    * @return boolean
    */
    public function alta($param){
        $resp = false;
        $elObjtTabla = $this->cargarObjeto($param);
        if ($elObjtTabla != null && $elObjtTabla->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
    * permite eliminar un objeto 
    * @param array $param
    * @return boolean
    */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
    * permite modificar un objeto
    * @param array $param
    * @return boolean
    */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
    * permite buscar un objeto
    * @param array $param
    * @return array
    */
    public function buscar($param){
        $where = " true ";
        if ($param <> NULL){
            if  (isset($param['Patente']))
                $where.=" and Patente ='".$param['Patente']."'";

            if  (isset($param['Marca']))
                $where.=" and Marca ='".$param['Marca']."'";

            if  (isset($param['Modelo']))
                $where.=" and Modelo ='".$param['Modelo']."'";

            if  (isset($param['DniDuenio']))
                $where.=" and DniDuenio ='".$param['DniDuenio']."'";
        }
        $autoObj = new Auto();
        $arreglo = $autoObj->listar($where);  

        $resultado = [];
        foreach ($arreglo as $objAuto) {
            $persona = $objAuto->getObjPersona();

            $resultado[] = [
                'Patente' => $objAuto->getPatente(),
                'Marca' => $objAuto->getMarca(),
                'Modelo' => $objAuto->getModelo(),
                'DniDuenio' => [
                    'NroDni' => $persona->getNroDni(),
                    'Nombre' => $persona->getNombre(),
                    'Apellido' => $persona->getApellido(),
                ] 
            ];
        }
        return $resultado;
    }

    //EJ 5

    public function mostrarAutos() {
        $autos = [];
        $auto = new Auto();   

        $lista = $auto->listar();  
        if (count($lista) > 0) {
            foreach ($lista as $objAuto) {
                $autos[] = $objAuto;
            }
        }
        return $autos;
    }

    public function insertarAuto($datos){
    $objAbmAuto = new ambAuto();
    $arrayAutos = $objAbmAuto->mostrarAutos();

    // Verifico si la patente ya existe
    foreach ($arrayAutos as $objAuto){
        if ($objAuto->getPatente() == $datos['patente']){
            return null; // ya existe, no insertamos
        }
    }

    // Si llegamos acá, no existe y podemos insertar
    $objAuto = new Auto();
    $nuevoAuto = $objAuto->insertar($datos);
    return $nuevoAuto;
    }
}