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
    public function EnviarEmail()
    {

        $to = "chimuco008@gmail.com";
        $subject = "Activação de conta de usuário";

        $message = "Saudações Administrador. Uma nova conta foi criada, por favor aceda ao painel para proceder à activação. ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

        $headers .= 'From: <chimuco007@gmail.com>' . "\r\n";
        if(mail($to, $subject, $message, $headers)){
            echo "Enviado";
        }else{
            echo "não enviou";
        }
        
    }
    public function createCliente($email, $senha, $tipo, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna)
    {
        
        try {
           
            $valorTipo = "cliente";
            $estadoCliente = "desativado";
            $id = $this->usuarioService->createNewUsuario($email, $valorTipo, $senha);

            $stmt = $this->db->prepare("INSERT INTO cliente (codUsuario,nomeCompleto,telemovel,morada,tipoCliente,nacionalidade,actividade,estado,fk_comuna,tipo) VALUES
            (:id,:nomeCompleto,:telemovel,:morada,:tipoCliente,:nacionalidade,:actividade,:estado,:fk_comuna,:tipo)");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nomeCompleto", $nomeCompleto);
            $stmt->bindParam(":telemovel", $telemovel);
            $stmt->bindParam(":morada", $morada);
            $stmt->bindParam(":nacionalidade", $nacionalidade);
            $stmt->bindParam(":actividade", $actividade);
            $stmt->bindParam(":estado", $estadoCliente);
            $stmt->bindParam(":fk_comuna", $fk_comuna);
            $stmt->bindParam(":tipoCliente", $valorTipo);
            $stmt->bindParam(":tipo", $tipo);
            $this->EnviarEmail();
            $result = $stmt->execute();
            return $result;
            
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
