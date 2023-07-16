<?php

include_once "../repositories/IuserRepository.php";
include_once "../repositories/user_repository.php";

class UsuarioService {

    private $user_repository;

    public function __construct(UserRepository $user_repository) {
        $this->user_repository = $user_repository;
    }

    public function createUser(User $user) {
        return $this->user_repository->createUser($user);
    }
}
