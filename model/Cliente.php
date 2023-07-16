<?php

/**
 * Description of Cliente
 *
 * @author Eugénio Chimuco
 */
class Cliente {

    private $id;
    private $name;
    private $tipo;
    private $actividade;
    private $communa_id;
    private $nacionalidade;
    private $morada;
    private $phone;
    private $estado;
    private $user_id;

    public function __construct($id, $name, $tipo, $actividade, $communa_id, $nacionalidade, $morada, $phone, $estado, $user_id) {
        $this->id = $id;
        $this->name = $name;
        $this->tipo = $tipo;
        $this->actividade = $actividade;
        $this->communa_id = $communa_id;
        $this->nacionalidade = $nacionalidade;
        $this->morada = $morada;
        $this->phone = $phone;
        $this->estado = $estado;
        $this->user_id = $user_id;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getActividade() {
        return $this->actividade;
    }

    public function getCommuna_id() {
        return $this->communa_id;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getMorada() {
        return $this->morada;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setActividade($actividade): void {
        $this->actividade = $actividade;
    }

    public function setCommuna_id($communa_id): void {
        $this->communa_id = $communa_id;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setMorada($morada): void {
        $this->morada = $morada;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setUser_id($user_id): void {
        $this->user_id = $user_id;
    }
}
