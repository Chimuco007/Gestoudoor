<?php

include_once (__DIR__.'../repositories/IuserRepository.php');
include_once (__DIR__.'/../repositories/user_repository.php');

class UsuarioService {

    private $user_repository;

    public function __construct(User_Repository $user_repository) {
        $this->user_repository = $user_repository;
    }

    public function createUser(Usuario $usuario) {
        return $this->user_repository->createUser($usuario);
    }
}
