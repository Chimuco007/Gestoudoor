<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="t/css/cadastro.css" rel="stylesheet" type="text/css"/>
        <title>Formulário</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="t/images/undraw_shopping_re_3wst.svg"  alt="">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se</h1>
                        </div>
                        <div class="login-button">
                            <button><a href="login.php" style="margin-top:5%;">Entrar</a></button>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Nome Completo</label>
                            <input id="firstname" type="text" name="firstname" placeholder="Digite seu nome completo" required>
                        </div>

                        <div class="gender-title">
                            <center>  <h6 style="margin-right: 45px;">Tipo de cliente</h6></center>
                            <div class="gender-group">
                                <div class="gender-input">
                                    <input id="female" type="radio" name="gender">
                                    <label for="female" style="margin-right: 20px;">Empresa</label>
                                </div>

                                <div class="gender-input">
                                    <input id="male" type="radio" name="gender">
                                    <label for="male" style="margin-right: 10px;">Particular</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>

                        <div class="input-box">
                            <label for="number">Phone</label>
                            <input id="number" type="tel" name="number" placeholder="(+xxx) xxx-xxx-xxx" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                        </div>


                        <div class="input-box">
                            <label for="confirmPassword">Confirme sua password</label>
                            <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                        </div>

                    </div>


                    <div class="continue-button">
                        <button><a href="#">Continuar</a> </button>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>
