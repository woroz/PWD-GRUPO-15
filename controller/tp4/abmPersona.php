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
        if (isset($param['NroDni'])) {          
        $obj = new Persona();
        $obj->setNroDni($param['NroDni']);  
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
        return $obj;
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
    // Debe venir el DNI como clave
    if (!$this->seteadosCamposClaves($param)) {
        return false;
    }

    // Traer el registro actual para completar campos que no vengan
    $actual = $this->buscar(['NroDni' => $param['NroDni']]);
    if (!is_array($actual) || count($actual) === 0) {
        return false; // no existe el DNI
    }
    $act = $actual[0]; // array asociativo

    // Armar el payload COMPLETO que exige cargarObjeto()
    $completo = [
        'NroDni'   => $param['NroDni'],
        'Apellido' => $param['Apellido']  ?? $act['Apellido'],
        'Nombre'   => $param['Nombre']    ?? $act['Nombre'],
        'fechaNac' => $param['fechaNac']  ?? $act['fechaNac'],
        'Telefono' => $param['Telefono']  ?? $act['Telefono'],
        'Domicilio'=> $param['Domicilio'] ?? $act['Domicilio'],
    ];

    // Construir el objeto y ejecutar el update
    $obj = $this->cargarObjeto($completo);
    return ($obj !== null) && $obj->modificar();
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