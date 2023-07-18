<?php
include_once 'Dbconfig/DbConnection.php';
include_once "model/provincia.php";


class ProvinciaRepository implements IProvincia
{

    private $db;

    function __construct()
    {
        $this->db = DbConnection::getInstance();
    }
    public function selectByIdProvincia($codProvincia)
    {
        $stmt = $this->db->prepare("SELECT * FROM municipio WHERE FK_Provincia = :codProvincia ORDER BY nomeMunicipio");
        $stmt->execute(['codProvincia' => $codProvincia]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
