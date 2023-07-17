<?php

$controller = new UsuarioController();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <!-- Adicionar os arquivos JavaScript do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste</title>
    </head>
    <body>

    <form method="post" class="container mt-4">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" class="form-control" id="tipo">
    </div>

    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" class="form-control" id="senha">
    </div>

    <input type="hidden" name="form-submitted" value="1"/>

    <button type="submit" name="enviar" class="btn btn-primary">Criar</button>
</form>

        <?php
            if (isset($_POST['enviar'])) {
                $controller->saveUsuario();
            }
        ?>

    </body>

</html>