<?php
include_once 'Dbconfig/DbConnection.php';
include_once "model/provincia.php";
include_once "repositories/IProvincia.php";


class ProvinciaRepository implements IProvincia
{

    private $db;

    function __construct()
    {
        $this->db = DbConnection::getInstance();
    }
    public function selectAll()
    {
        $provincias = array();
        $stmt = $this->db->prepare("SELECT * FROM provincia");
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $provincia) {
            $provincias[] = new Provincia($provincia['codProvincia'], $provincia['nome']);
        }
        return $provincias;
    }
}
