<?php

include_once('services/ProvinciaService.php');

class ProvinciaController
{

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    private $provinciaservice = NULL;

    public function __construct()
    {
        $this->provinciaservice = new ProvinciaService();
    }

    public function getAllProvincias()
    {
        return $this->provinciaservice->getAllProvincias();
    }
}
