<?php

include_once('services/ClienteService.php');

class ClienteController
{

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    private $clienteService = NULL;

    public function __construct()
    {
        $this->clienteService = new ClienteService();
    }

    public function saveCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna)
    {

        try {
            return $this->clienteService->createNewCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna);
        } catch (Exception $e) {
        }
    }
}
