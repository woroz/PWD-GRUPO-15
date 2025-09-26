<?php
require_once __DIR__ . '/../../model/persona.php';
class AbmPersona {
    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * @param array $param
    * @return Tabla
    */
    private function cargarObjetoConClave ($param) {
        $obj = null;
        if (isset ($param['nroDni'])) {
            $obj = new Persona();
            $obj->setnroDni($param['nroDni']);
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
            array_key_exists('NroDni', $param) && array_key_exists('Apellido', $param) &&
            array_key_exists('Nombre', $param) && array_key_exists('fechaNac', $param) &&
            array_key_exists('Telefono', $param) && array_key_exists('Domicilio', $param)
            ) {
            $obj = new Persona ();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni']))
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
        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni =".$param['NroDni'];

            if  (isset($param['Nombre']))
                $where.=" and Nombre ='".$param['Nombre']."'";

            if  (isset($param['Apellido']))
                $where.=" and Apellido ='".$param['Apellido']."'";

            if  (isset($param['fechaNac']))
                $where.=" and fechaNac ='".$param['fechaNac']."'";

            if  (isset($param['Telefono']))
                $where.=" and Telefono ='".$param['Telefono']."'";

            if  (isset($param['Domicilio']))
                $where.=" and Domicilio ='".$param['Domicilio']."'";
        }
        $objPersona=new Persona();
        $arreglo = $objPersona->listar($where); 
        
        $resultado = [];
        foreach ($arreglo as $persona) {
            $resultado[] = [
                'NroDni' => $persona->getNroDni(),
                'Apellido' => $persona->getApellido(),
                'Nombre' => $persona->getNombre(),
                'fechaNac' => $persona->getFechaNac(),
                'Telefono' => $persona->getTelefono(),
                'Domicilio' => $persona->getDomicilio()
            ];
        }
        return $resultado;
    }

    // EJ 4

    public function mostrarPersonas() {
        $personas = [];
        $persona = new Persona();   // Modelo Auto

        $lista = $persona->listar();  // Método listar() en Auto (Modelo)
        if (count($lista) > 0) {
            foreach ($lista as $objPersona) {
                $personas[] = $objPersona;
            }
        }
        return $personas;
    }

    public function insertarPersona($datos){
    $objAbmPersona = new AbmPersona();
    $arrayPersonas = $objAbmPersona->mostrarPersonas();

    // Verifico si el DNI ya existe
    foreach ($arrayPersonas as $objPersona){
        if ($objPersona->getNroDni() == $datos['nroDni']){
            return null; // ya existe, no insertamos
        }
    }

    // Si no existe -> creo una nueva Persona
    $objPersona = new Persona();
    $objPersona->setear(
        $datos['nroDni'],
        $datos['apellido'],
        $datos['nombre'],
        $datos['fechaNac'],
        $datos['telefono'],
        $datos['domicilio']
    );

    if ($objPersona->insertar()) {   // usar método insertar() del modelo Persona
        return $objPersona;          // devuelvo el objeto ya guardado
    }

    return null; // si falló la inserción
}

}