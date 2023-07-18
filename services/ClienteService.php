<?php

include_once('repositories/ClienteRepository.php');
include_once('services/IClienteService.php');

class ClienteService implements IClienteService
{
    //createNewUsuario($email, $tipo, $senha)
    private $clienteRepository = NULL;

    public function __construct()
    {
        $this->clienteRepository = new ClienteRepository();
    }

    public function createNewCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna)
    {
        try {
            return $this->clienteRepository->createCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
