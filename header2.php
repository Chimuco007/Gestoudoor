<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bridge Evolution</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="content/bootstrap/css/bootstrap-icons.css" rel="stylesheet">
    <link href="content/bootstrap/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="content/bootstrap/css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- Template Main CSS File -->
    <link href="content/bootstrap/css/style.css" rel="stylesheet">
    <link href="scripts/custom/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.php">Gest<span class="color-b">outdoor</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Províncias</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Outdoores</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="view/outdoor.php">Paineis Luminosos</a>
                            <a class="dropdown-item " href="view/outdoor.php">Paineis não Luminosos</a>
                            <a class="dropdown-item " href="view/outdoor.php">Placas Indicativas</a>
                            <a class="dropdown-item " href="view/outdoor.php">Faixadas</a>
                            <a class="dropdown-item " href="view/outdoor.php">Placas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="view/sobre.php"> Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="view/contacto.php">Contacto</a>
                    </li>

                </ul>
            </div>

            <button onclick="redirecionar()" type="button" id="but" class="btn  btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                Login </button>
        </div>
    </nav>
    <script>
        function redirecionar() {
            window.location.href = "index.php?op=login";
        }
    </script>
    <script src="scripts/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="scripts/bootstrap/swiper-bundle.min.js" type="text/javascript"></script>

    <!-- Template Main JS File -->
    <script src="scripts/bootstrap/main.js" type="text/javascript"></script>

</body>

</html>