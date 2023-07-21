<?php

include_once('repositories/Municipio.php');
include_once('services/IMunicipioService.php');
class MunicipioService implements IMunicipioService
{

    private $municipioRepository = NULL;

    public function __construct()
    {
        $this->municipioRepository = new MunicipioRepository();
    }

    public function getAllByIdMunicipio($codProvincia)
    {
        try {  
            $res = $this->municipioRepository->selectByIdProvincia($codProvincia);
            return $res;
        } catch (Exception $e) {
        }
    }
}