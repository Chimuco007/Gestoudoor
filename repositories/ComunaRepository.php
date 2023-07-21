<?php
include_once 'Dbconfig/DbConnection.php';
include_once "model/Comuna.php";
include_once "repositories/IComuna.php";


class ComunaRepository implements IComuna
{

    private $db;

    function __construct()
    {
        $this->db = DbConnection::getInstance();
    }
    public function selectByIdMunicipio($codMunicipio)
    {
        $stmt = $this->db->prepare("SELECT * FROM comuna WHERE fk_municipio = :codMunicipio ORDER BY nome");
        $stmt->execute(['codMunicipio' => $codMunicipio]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}