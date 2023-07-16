<?php

include_once(__DIR__ . '../services/UsuarioService.php');
class UsuarioController
{

    private $usuarioService;

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function createUser(Usuario $usuario)
    {
        $IdDoUsuario = $this->usuarioService->createUser($usuario);

        if ($IdDoUsuario) {
            return $IdDoUsuario;
           // return false;
            //echo "Novo usuário criado com o ID: " . $IdDoUsuario;
        } else {
            echo "Erro ao criar o usuário.";
        }
    }
}
