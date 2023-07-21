<?php

include_once 'Dbconfig/DbConnection.php';
include_once 'model/Usuario.php';
include_once('repositories/IUsuarioRepository.php');

class UsuarioRepository implements IUsuarioRepository
{

    private $db;

    function __construct()
    {
        $this->db = DbConnection::getInstance();
    }

    public function createUsuario($email, $tipo, $senha)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO usuario (email, tipo, senha) VALUES (:email,:tipo,:senha)");
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":tipo", $tipo);
            $stmt->bindParam(":senha", $senha);
            $stmt->execute();

            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function sistemaLogin($email)
    {
        
            $stmt = $this->db->prepare("SELECT * FROM usuario WHERE email = :email");
            $stmt->bindparam(':email', $email);
            $stmt->execute();
            $usuario = $stmt->fetch();
            
            return new Usuario($usuario['codUsuario'], $usuario['email'], $usuario['senha'],$usuario['tipo']);
        
    }
}
