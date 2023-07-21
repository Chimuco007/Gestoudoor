<?php

include_once('repositories/ProvinciaRepository.php');
include_once('services/IProvinciaService.php');
class ProvinciaService implements IProvinciaService
{

    private $provinciaRepository = NULL;

    public function __construct()
    {
        $this->provinciaRepository = new ProvinciaRepository();
    }

    public function getAllProvincias()
    {
        try {
            $res = $this->provinciaRepository->selectAll();
            return $res;
        } catch (Exception $e) {
        }
    }
}
