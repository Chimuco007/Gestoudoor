<?php

interface IClienteService
{
    public function createNewCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna);
}
