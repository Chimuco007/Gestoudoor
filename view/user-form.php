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
                        <td>Nome Completo</td>
                        <td><input type="text" name="nomeCompleto" value="" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>E-mail </td>
                        <td><input type="text" name="email" value="" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>Tipo CLiente </td>
                        <td><input type="text" name="tipoCliente" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Provincia </td>
                        <td><input type="text" name="provincia" value="" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>Municipio </td>
                        <td><input type="text" name="municipio" value="" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>Comuna </td>
                        <td><input type="text" name="comuna" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Morada</td>
                        <td><input type="text" name="morada" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Telemovel</td>
                        <td><input type="text" name="telemovel" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Usuario Name</td>
                        <td><input type="text" name="Usuarioname" value="" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                                <span class="glyphicon glyphicon-plus"></span> Registrar
                            </button>  
                            <input type="hidden" name="form-submitted" value="1" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        require_once 'llers/UsuarioController.php';
        $controller = new UsuarioController();
        $controller->saveUsuario();
        ?>
    </body>

</html>



