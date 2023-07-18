<?php
include_once 'Dbconfig/DbConnection.php';
include_once 'model/Cliente.php';
include_once('repositories/IClienteRepository.php');
include_once('services/UsuarioService.php');
class ClienteRepository implements IClienteRepository
{

    private $db;
    private $usuarioService = null;


    function __construct()
    {
        $this->db = DbConnection::getInstance();
        $this->usuarioService = new UsuarioService();
    }

    public function createCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna)
    {
        try {
            //fazer uma consulta..
            $valorTipo = "cliente";
            $id = $this->usuarioService->createNewUsuario($email, $valorTipo, $senha);
            $stmt = $this->db->prepare("INSERT INTO cliente (codUsuario,nomeCompleto,telemovel,morada,tipoCliente,nacionalidade,actividade,estado,fk_comuna) VALUES
            (:id,:nomeCompleto,:telemovel,:morada,:tipoCliente,:nacionalidade,:actividade,:estado,:fk_comuna)");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nomeCompleto", $nomeCompleto);
            $stmt->bindParam(":telemovel", $telemovel);
            $stmt->bindParam(":morada", $morada);
            $stmt->bindParam(":nacionalidade", $nacionalidade);
            $stmt->bindParam(":actividade", $actividade);
            $stmt->bindParam(":estado", $estado);
            $stmt->bindParam(":fk_comuna", $fk_comuna);
            $stmt->bindParam(":tipoCliente", $tipoCliente);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
