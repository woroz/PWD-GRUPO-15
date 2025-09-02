<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;
    public $estudio;
    public $sexo;
    public $deportes = [];

    public function __construct($nombre, $apellido, $edad, $direccion, $estudio, $sexo, $deportes = []) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
        $this->estudio = $estudio;
        $this->sexo = $sexo;
        $this->deportes = $deportes;
    }

    public function mayorEdad() {
        return $this->edad >= 18 ? "Mayor de edad" : "Menor de edad";
    }

    public function estudioTexto() {
        switch ($this->estudio) {
            case '1': return "No tiene estudios";
            case '2': return "Tiene estudios primarios";
            case '3': return "Tiene estudios secundarios";
            default: return "";
        }
    }

    public function sexoTexto() {
        return $this->sexo === 'femenino' ? ": femenino" : ": masculino";
    }

    public function deportesTexto() {
        $cantidad = count($this->deportes);
        return $cantidad > 0 ? "$cantidad deportes" : "No practica deportes";
    }

public function mostrarMensaje() {
    return 
        "Nombre: $this->nombre<br>" .
        "Apellido: $this->apellido<br>" .
        "Sexo: " . $this->sexoTexto() . "<br>" .
        "Edad: " . $this->mayorEdad() . "<br>" .
        "Dirección: $this->direccion<br>" .
        "Nivel de estudios: " . $this->estudioTexto() . "<br>" .
        "Cantidad de deportes: " . $this->deportesTexto() . "<br>";
}

}
?>

