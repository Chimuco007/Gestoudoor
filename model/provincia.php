<?php

class provincia {

    private $codUsuario;
    private $nome;

    public function __construct($codUsuario, $nome) {
        $this->codUsuario = $codUsuario;
        $this->nome = $nome;
    }

    public function getCodUsuario() {
        return $this->codUsuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCodUsuario($codUsuario): void {
        $this->codUsuario = $codUsuario;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }
}
