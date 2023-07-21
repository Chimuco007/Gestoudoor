<?php

class Municipio {
    
    private $nome;
    private $codMunicipio;
    private $fk_provincia;
    
    public function __construct($nome, $codMunicipio, $fk_provincia) {
        $this->nome = $nome;
        $this->codMunicipio = $codMunicipio;
        $this->fk_provincia = $fk_provincia;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCodMunicipio() {
        return $this->codMunicipio;
    }

    public function getFk_provincia() {
        return $this->fk_provincia;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCodMunicipio($codMunicipio): void {
        $this->codMunicipio = $codMunicipio;
    }

    public function setFk_provincia($fk_provincia): void {
        $this->fk_provincia = $fk_provincia;
    }



}

?>