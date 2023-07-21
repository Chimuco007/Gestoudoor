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
            } else if ($op == 'signupCliente') {
                $this->formularioCliente();
            } else if ($op == 'municipio') {
                $this->municipio();
            } else if ($op == 'comuna') {
                $this->comuna();
            } else if ($op == 'login') {
                $this->login();
            } else if ($op == 'admin') {
                $this->admin();
            } else {
            }
        } catch (Exception $e) {
        
        }
    }
    public function home()
    {
        include_once 'view/home.php';
    }
    public function municipio()
    {
        $codProvincia = $_POST['provincia'];
        include_once 'view/municipio.php';
    }
    public function comuna()
    {
        $codMunicipio = $_POST['municipio'];
        include_once 'view/comuna.php';
    }

    public function admin()
    {
        $codMunicipio = $_POST['admin'];
        include_once 'view/admin.php';
    }

    public function login()
    {
        if (isset($_POST['form-submitted'])) {

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = $this->usuarioService->SistemaLogin($email);

            if (password_verify($senha, $usuario->getSenha())) {
                if (!isset($_SESSION))
                    session_start();
                $_SESSION['id'] = $usuario;
                $this->NivelDeAcesso($usuario->getTipo());
            } else {
                echo "Falha ao logar ! Senha ou email incorrectos";
            }
        }

        include_once 'view/login.php';
    }


    public function NivelDeAcesso($tipo)
    {

        if ($tipo == 'gestor') {
            // header("Location:index.php?op=gestor");
        } else if ($tipo == 'administrador') {
            // header("Location:index.php?op=admin.php");
            $this->admin();
        } else {
            $this->home();
        }
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
            $codComuna = isset($_POST['tipo']) ? filter_input(INPUT_POST, 'tipo') : NULL;
            $nomeCompleto = isset($_POST['nomeCompleto']) ? filter_input(INPUT_POST, 'nomeCompleto') : NULL;
            $telemovel = isset($_POST['telemovel']) ? filter_input(INPUT_POST, 'telemovel') : NULL;
            $morada = isset($_POST['morada']) ? filter_input(INPUT_POST, 'morada') : NULL;
            $tipoCliente = isset($_POST['tipoCliente']) ? filter_input(INPUT_POST, 'tipoCliente') : NULL;
            $nacionalidade = isset($_POST['nacionalidade']) ? filter_input(INPUT_POST, 'nacionalidade') : NULL;
            $actividade = isset($_POST['actividade']) ? filter_input(INPUT_POST, 'actividade') : NULL;
            $estado = isset($_POST['actividade']) ? filter_input(INPUT_POST, 'actividade') : NULL;
            $fk_comuna = isset($_POST['comuna']) ? filter_input(INPUT_POST, 'comuna') : NULL;

            $senha = password_hash($senha, PASSWORD_DEFAULT);

            $this->clienteController->saveCliente($email, $senha, $tipo, $nomeCompleto, $telemovel, $morada, $tipoCliente, $nacionalidade, $actividade, $estado, $fk_comuna);
            //header("Location:index.php?op=login");
        }

        include_once 'view/signupCliente.php';
    }
}
