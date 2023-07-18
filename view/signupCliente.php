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
                    <td>Name Completo</td>
                    <td><input type="text" name="nomeCompleto" value="" class="form-control" required></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" value="" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="telemovel" value="" class="form-control" required></td>
                </tr>

                <tr>

                    <label>Província : </label>
                    <select name="provincia">
                        <option value="">Selecione a província</option>
                        <!-- Opções de províncias -->
                    </select>
                </tr>

                <tr>
                    <label>Município :</label>
                    <select name="municipio">
                        <option value="">Selecione o município</option>
                        <!-- Opções de municípios -->
                    </select>
                </tr>
                <tr>
                    <label for="codComuna">Comuna : </label>
                    <select name="communa">
                        <option value="">Selecione a comuna</option>
                        <!-- Opções de comunas -->
                    </select>
                </tr>
                <tr>
                    <td>morada</td>
                    <td><input type="text" name="morada" value="" class="form-control" required></td>
                </tr>
                <tr>
                    <br>
                    <br>
                    <br>
                    <label>País</label>
                    <select name="nacionalidade">
                        <option value="">Selecione o país</option>
                        <!-- Opções de países -->
                    </select>
                </tr>

                <tr>
                    <td>Actividade</td>
                    <td><input type="text" name="actividade" value="" class="form-control" required></td>
                </tr>
                <tr>
                    <br><br> <label for="">TipoCliente</label>
                    <select name="tipoCliente">
                        <option value="">Selecione o tipo de entidade</option>
                        <option value="Empresa">Empresa</option>
                        <option value="Singular">Singular</option>
                    </select>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><input type="text" name="estado" value="" class="form-control" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="senha" value="" class="form-control" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="enviar">
                            <span class="glyphicon glyphicon-plus"></span> Registrar
                        </button>
                        <input type="hidden" name="form-submitted" value="1" />
                    </td>
                </tr>
            </table>
        </form>
    </div>


</body>

</html>