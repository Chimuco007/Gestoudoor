<?php
include_once 'Dbconfig/DbConnection.php';
include_once "model/Municipio.php";
include_once "repositories/IMunicipio.php";


class MunicipioRepository implements IMunicipio
{

    private $db;

    function __construct()
    {
        $this->db = DbConnection::getInstance();
    }
    public function selectByIdProvincia($codProvincia)
    {
        $stmt = $this->db->prepare("SELECT * FROM municipio WHERE fk_provincia = :codProvincia ORDER BY nome");
        $stmt->execute(['codProvincia' => $codProvincia]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
