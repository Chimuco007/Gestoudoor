<?php

class provincia {

    private $codProvincia;
    private $nome;

    public function __construct($codProvincia, $nome) {
        $this->codProvincia = $codProvincia;
        $this->nome = $nome;
    }

    public function getCodProvincia() {
        return $this->codProvincia;
    }

    public function setCodProvincia($codProvincia): void {
        $this->codProvincia = $codProvincia;
    }

    
    public function getNome() {
        return $this->nome;
    }

 
    public function setNome($nome): void {
        $this->nome = $nome;
    }
}
