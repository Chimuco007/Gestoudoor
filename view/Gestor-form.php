<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
    </head>

    <body>
        <div class="container">
            <form method='post'>
                <table class='table table-bordered'>
                    <tr>
                        <td>CodigoUsuario</td>
                        <td><input type="text" name="codUsuario" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>comuna</td>
                        <td><input type="text" name="codComuna" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Name Completo</td>
                        <td><input type="text" name="nomeCompleto" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="telemovel" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>morada</td>
                        <td><input type="text" name="morada" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><input type="text" name="email" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>UsuarioName</td>
                        <td><input type="text" name="Usuarioname" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="text" name="password" value="" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                                <span class="glyphicon glyphicon-plus"></span> Registrar
                            </button>  
                            <input type="hidden" name="form-submitted2" value="1" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        require_once 'llers/GestorController.php';
        $controller = new GestorController();
        $controller->saveGestor();
        ?>
    </body>

</html>
