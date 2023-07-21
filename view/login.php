<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="content/css/style2.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="container">
            <div class="form-box">
                <header>
                    <h1 id="title">Login</h1>
                </header>
                <br>
                <form method="post">
                    <input type="text" id="nome" name="email" placeholder="Email" required>

                    <input type="password" name="senha" placeholder="password" required name="" id="">

                    <a href="#">Esqueceu a password ?</a>
                    <input type="submit" value="Login" id="signinBtn">
                    <input type="hidden" name="form-submitted" value="1">
                    <div class="links">
                        <a href="http://"><img src="content/images/face.png" alt=""/></a>
                        <a href="http://"><img src="content/images/insta.png" alt=""></a>
                        <a href="http://"><img src="content/images/twitter.png" alt=""></a>
                        <a href="http://"><img src="content/images/googel.png" alt=""></a>
                        <a href="http://"><img src="content/images/zap.png" alt=""></a>
                    </div>
                    <br>
                    <p class="signup">Não tens conta ? </p> <a href="index.php?op=signupCliente" id="signupBtn">Criar conta</a>
                </form>

            </div>
        </div>

    </body>

</html>