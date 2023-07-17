<?php
include_once 'Dbconfig/DbConnection.php';
include_once 'model/Cliente.php';
include_once('repositories/IClienteRepository.php');

class ClienteRepository implements IClienteRepository
{

    private $db;

    function __construct()
    {
        $this->db = DbConnection::getInstance();
    }

    public function createCliente($codUsuario, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado,    $fk_comuna, $tipo)
    {
        try {

            $stmt = $this->db->prepare("INSERT INTO cliente (codUsuario, codComuna,nomeCompleto,telemovel,morada,tipoCliente,nacionalidade,	actividade,estado,fk_comuna,tipo) VALUES (:codCliente,:codUsuario,:codComuna,:nomeCompleto,:telemovel,:morada,:tipoCliente,:nacionalidade,:actividade,:estado,:fk_comuna,:tipo)");
            $stmt->bindParam(":codUsuario", $codUsuario);
            $stmt->bindParam(":codComuna", $tipo);
            $stmt->bindParam(":nomeCompleto", $nomeCompleto);
            $stmt->bindParam(":telemovel", $telemovel);
            $stmt->bindParam(":morada", $morada);
            $stmt->bindParam(":nacionalidade", $nacionalidade);
            $stmt->bindParam(":actividade", $actividade);
            $stmt->bindParam(":estado", $estado);
            $stmt->bindParam(":fk_comuna", $fk_comuna);
            $stmt->bindParam(":tipo", $tipo);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
