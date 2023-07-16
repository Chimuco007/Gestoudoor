<?php

class Usuario {

    private $id;
    private $email;
    private $password;
    private $tipo;
    
    public function __construct($id, $email, $password, $tipo) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->tipo = $tipo;
    }
    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }



}
