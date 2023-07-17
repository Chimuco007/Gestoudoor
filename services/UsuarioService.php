<?php

include_once('repositories/Usuariorepository.php');
include_once('services/IUsuarioService.php');

class UsuarioService implements IUsuarioService {

    private $usuarioRepository = NULL;

    public function __construct() {
        $this->usuarioRepository = new Usuariorepository();
    }

    public function createNewUsuario($email, $tipo, $senha) {
        try {
           $this->usuarioRepository->createUsuario($email, $tipo, $senha);
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
