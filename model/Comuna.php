<?php



/**
 * Description of Comuna
 *
 * @author Eugénio Chimuco
 */
class Comuna {

    private $codComuna;
    private $nome;
    private $fk_municipio;

    public function __construct($codComuna, $nome, $fk_municipio) {
        $this->codComuna = $codComuna;
        $this->nome = $nome;
        $this->fk_municipio = $fk_municipio;
    }

    public function getCodComuna() {
        return $this->codComuna;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getFk_municipio() {
        return $this->fk_municipio;
    }

    public function setCodComuna($codComuna): void {
        $this->codComuna = $codComuna;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setFk_municipio($fk_municipio): void {
        $this->fk_municipio = $fk_municipio;
    }
}
