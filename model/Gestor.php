<?php

/**
 * Description of Gestor
 *
 * @author Eugénio Chimuco
 */
class Gestor {

    private $id_Gestor;
    private $nomeCompleto;
    private $email;
    private $comuna_id;
    private $morada;
    private $phone;
    private $Usuarioname;
    private $password;

    //private $is_admin;

    public function __construct($id_Gestor, $nomeCompleto, $email, $comuna_id, $morada, $phone, $Usuarioname, $password) {
        $this->id_Gestor = $id_Gestor;
        $this->nomeCompleto = $nomeCompleto;
        $this->email = $email;
        $this->comuna_id = $comuna_id;
        $this->morada = $morada;
        $this->phone = $phone;
        $this->Usuarioname = $Usuarioname;
        $this->password = $password;
    }

    public function getId_Gestor() {
        return $this->id_Gestor;
    }

    public function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getComuna_id() {
        return $this->comuna_id;
    }

    public function getMorada() {
        return $this->morada;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getUsuarioname() {
        return $this->Usuarioname;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setId_Gestor($id_Gestor): void {
        $this->id_Gestor = $id_Gestor;
    }

    public function setNomeCompleto($nomeCompleto): void {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setComuna_id($comuna_id): void {
        $this->comuna_id = $comuna_id;
    }

    public function setMorada($morada): void {
        $this->morada = $morada;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setUsuarioname($Usuarioname): void {
        $this->Usuarioname = $Usuarioname;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }
}
