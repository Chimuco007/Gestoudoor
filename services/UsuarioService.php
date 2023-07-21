<?php

include_once('repositories/Usuariorepository.php');
include_once('services/IUsuarioService.php');

class UsuarioService implements IUsuarioService
{

    private $usuarioRepository = NULL;

    public function __construct()
    {
        $this->usuarioRepository = new Usuariorepository();
    }

    public function createNewUsuario($email, $tipo, $senha)
    {
        try {
            return  $this->usuarioRepository->createUsuario($email, $tipo, $senha);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function SistemaLogin($email)
    {
        try {
            return  $this->usuarioRepository->sistemaLogin($email);
        } catch (Exception $e) {
            throw $e;
        }
    }

   
}
