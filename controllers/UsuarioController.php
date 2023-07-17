<?php

include_once('services/UsuarioService.php');

class UsuarioController
{

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    private $usuarioService = NULL;

    public function __construct()
    {
        $this->usuarioService = new UsuarioService();
    }

    public function menu()    
    {
        $filterOp = filter_input(INPUT_GET, 'op');
        $op = isset($filterOp) ? $filterOp : NULL;
        try {
            if (!$op || $op == 'home') {
                $this->home();
            } else if ($op == 'new') {
                $this->saveUsuario();
            } else if ($op == 'delete') {
              //  $this->deleteContact();
            } else if ($op == 'details') {
               // $this->editContacto();
            } else {
                //$this->showError("Page not found", "Page for operation " . $op . " was not found!");
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            //    $this->showError("Application error", $e->getMessage());
        }
    }
    public function home(){
        include_once'view/teste.php';
    }
    public function saveUsuario()
    {
        $email = '';
        $tipo = '';
        $senha = '';


        if (isset($_POST['form-submitted'])) {

            $email = isset($_POST['email']) ? filter_input(INPUT_POST, 'email') : NULL;
            $tipo = isset($_POST['tipo']) ? filter_input(INPUT_POST, 'tipo') : NULL;
            $senha = isset($_POST['senha']) ? filter_input(INPUT_POST, 'senha') : NULL;

            try {
                $this->usuarioService->createNewUsuario($email, $tipo, $senha);
                //$this->redirect('php');
                return;
            } catch (Exception $e) {
            }
        }
        include_once 'view/teste.php';
    }
}
