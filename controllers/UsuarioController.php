<?php

include_once '../services/UsuarioService.php';

class UsuarioController {

    private $user_service;

    public function __construct(UserService $user_service) {
        $this->user_service = $user_service;
    }

    public function createUser(User $user) {
        $new_user_id = $this->user_service->createUser($user);

        if ($new_user_id) {
            return $new_user_id;
            return false;
            echo "Novo usuário criado com o ID: " . $new_user_id;
        } else {
            echo "Erro ao criar o usuário.";
        }
    }
}
