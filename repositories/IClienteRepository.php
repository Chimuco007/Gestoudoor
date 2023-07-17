<?php

interface IClienteRepository{
    public function createCliente($codUsuario, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado,    $fk_comuna, $tipo);
}