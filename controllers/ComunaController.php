<?php

include_once('services/ComunaService.php');

class ComunaController
{

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    private $municipioservice = NULL;
    

    public function __construct()
    {
        $this->municipioservice = new ComunaService();
    }

    public function getAllByIdMunicipio($codMunicipio)
    {
        return $this->municipioservice->getAllByIdComuna($codMunicipio);
    }
}