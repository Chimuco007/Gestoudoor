<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se na nossa página</title>

    <!-- Inclua o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #2eca6a;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 5px;
            padding: 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: flex;
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .form-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            background-color: #f7f9fc;
            border: none;
        }

        .form-control:focus {
            background-color: #ffffff;
            box-shadow: none;
        }

        .btn-submit {
            background-color: #2eca6a;
            border-color: #257016;
            color: #ffffff;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #2eca6a;
        }

        .image-container {
            flex: 1;
            background-image: url('content/images/outdoor00.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <h2 class="form-title">Cadastre-se na nossa página</h2>
            <form method="post">
                <div class="form-group">
                    <label for="nomeCompleto">Nome Completo</label>
                    <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telemovel" name="telemovel" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="provincia">Província</label>
                    <select id="provincia" name="provincia" class="form-control" required>
                        <option value="">Selecione a província</option>
                        <?php
                        include_once 'controllers/ProvinciaController.php';
                        $rovinciaController = new ProvinciaController();

                        $contact = $rovinciaController->getAllProvincias();
                        foreach ($contact as $contacts) {
                            echo "<option value='" . $contacts->getCodProvincia() . "'>" .
                                $contacts->getNome() . "</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="municipio">Município</label>
                    <select id="municipio" name="municipio" class="form-control" required>
                        <option value="">Selecione o município</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="comuna">Comuna</label>
                    <select id="comuna" name="comuna" class="form-control" required>
                        <option value="">Selecione a comuna</option>
                        <!-- Opções de comunas -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="morada">Morada</label>
                    <input type="text" id="morada" name="morada" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nacionalidade">País</label>
                    <select id="nacionalidade" name="nacionalidade" class="form-control" required>
                        <option value="">Selecione o país</option>
                        <option value="Angola">Angola</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="actividade">Atividade</label>
                    <input type="text" id="actividade" name="actividade" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tipoEntidade">Tipo de Entidade</label>
                    <select id="tipo" name="tipo" class="form-control" required>
                        <option value="">Selecione o tipo de entidade</option>
                        <option value="Empresa">Empresa</option>
                        <option value="Singular">Singular</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-submit" name="enviar">Registrar</button>
                    <input type="hidden" name="form-submitted" value="1">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts/custom/cascata.js"></script>
</body>

</html>