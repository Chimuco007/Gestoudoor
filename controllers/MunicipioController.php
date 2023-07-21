<?php

include_once('services/MunicipioService.php');

class MunicipioController
{

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    private $municipioservice = NULL;
    

    public function __construct()
    {
        $this->municipioservice = new MunicipioService();
    }

    public function getAllByIdMunicipio($codProvincia)
    {
        return $this->municipioservice->getAllByIdMunicipio($codProvincia);
    }
}
