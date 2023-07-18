<?php

interface IClienteRepository{
    public function createCliente($email,$senha,$codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado,$fk_comuna);
}