<?php

include_once('services/UsuarioService.php');
include_once('controllers/ClienteController.php');


class UsuarioController
{

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    private $usuarioService = NULL;
    private $clienteController = NULL;

    public function __construct()
    {
        $this->usuarioService = new UsuarioService();
        $this->clienteController = new ClienteController();
    }

    public function menu()
    {
        $filterOp = filter_input(INPUT_GET, 'op');
        $op = isset($filterOp) ? $filterOp : NULL;
        try {
            if (!$op || $op == 'home') {
                $this->home();
            } else if ($op == 'new') {
            } else if ($op == 'delete') {
                //  $this->deleteContact();
            } else if ($op == 'details') {
                // $this->editContacto();
            } else if ($op == 'login') {
                $this->formularioCliente();
            } else {
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            //    $this->showError("Application error", $e->getMessage());
        }
    }
    public function home()
    {
        include_once 'view/home.php';
    }

    public function formularioCliente()
    {
        $email = '';
        $tipo = '';
        $senha = '';


        if (isset($_POST['form-submitted'])) {

            $email = isset($_POST['email']) ? filter_input(INPUT_POST, 'email') : NULL;
            $tipo = isset($_POST['tipo']) ? filter_input(INPUT_POST, 'tipo') : NULL;
            $senha = isset($_POST['senha']) ? filter_input(INPUT_POST, 'senha') : NULL;
            $codComuna = isset($_POST['codComuna']) ? filter_input(INPUT_POST, 'codComuna') : NULL;
            $nomeCompleto = isset($_POST['nomeCompleto']) ? filter_input(INPUT_POST, 'nomeCompleto') : NULL;
            $telemovel = isset($_POST['telemovel']) ? filter_input(INPUT_POST, 'telemovel') : NULL;
            $morada = isset($_POST['morada']) ? filter_input(INPUT_POST, 'morada') : NULL;
            $tipoCliente = isset($_POST['tipoCliente']) ? filter_input(INPUT_POST, 'tipoCliente') : NULL;
            $nacionalidade = isset($_POST['nacionalidade']) ? filter_input(INPUT_POST, 'nacionalidade') : NULL;
            $actividade = isset($_POST['actividade']) ? filter_input(INPUT_POST, 'actividade') : NULL;
            $estado = isset($_POST['actividade']) ? filter_input(INPUT_POST, 'actividade') : NULL;
            $fk_comuna = isset($_POST['fk_comuna']) ? filter_input(INPUT_POST, 'fk_comuna') : NULL;

            $this->clienteController->saveCliente($email, $senha, $codComuna, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna);
        }
        include_once 'view/signupCliente.php';
    }
}
