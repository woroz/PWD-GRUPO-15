<?php
class Login {
    private $user;
    private $password;

    public function __construct($user, $password) {
        $this->user = $user;
        $this->password = $password;
    }

    public function validarUser() {
        $loginMessage = "Acceso denegado";
        $usuarios = [
            ["user" => "juan", "password" => "juan1234"],
            ["user" => "ana", "password" => "ana56781"],
            ["user" => "pedro", "password" => "pedro1030"]
        ];
        foreach ($usuarios as $usuario) {
            if ($this->user === $usuario['user'] && $this->password === $usuario['password']) {
                $loginMessage = "Acceso concedido";
            }
        }
        return $loginMessage;   
    }

}