<?php

class Usuario {

    private $id;
    private $email;
    private $senha;
    private $tipo;

    public function __construct($email, $tipo, $senha) {
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
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

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }
}
