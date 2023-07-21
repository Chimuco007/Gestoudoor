<?php

include_once('repositories/ComunaRepository.php');
include_once('services/IComunaService.php');
class ComunaService implements IComunaService
{
    private $comunaRepository = NULL;

    public function __construct()
    {
        $this->comunaRepository = new ComunaRepository();
    }
    public function getAllByIdComuna($codMunicipio)
    {
        try {
            $res = $this->comunaRepository->selectByIdMunicipio($codMunicipio);
            return $res;
        } catch (Exception $e) {
        }
    }
}
