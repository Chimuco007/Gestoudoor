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

        <link href="../content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../content/bootstrap/css/bootstrap-icons.css" rel="stylesheet">
        <link href="../content/bootstrap/css/swiper-bundle.min.css" rel="stylesheet">
        <link href="../content/bootstrap/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="../content/css/estilo.css" rel="stylesheet" type="text/css"/>
        <!-- Template Main CSS File -->
        <link href="../content/bootstrap/css/style.css" rel="stylesheet">
        <link href="../scripts/custom/estilo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <?php
        include_once("../header2.php");
        ?>

        <main id="main">

            <!-- ======= Intro Single ======= -->
            <section class="intro-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="title-single-box">
                                <h1 class="title-single">Contact US</h1>
                                <span class="color-text-a">Em caso de dúvida não e</span>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Contact
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section><!-- End Intro Single-->

            <!-- ======= Contact Single ======= -->
            <section class="contact">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-sm-12 section-t8">
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Nome" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder=" Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" name="messagem" cols="45" rows="8" placeholder="Messagem" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 my-3">
                                                <div class="mb-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-a">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-5 section-md-t3">
                                    <div class="icon-box section-b2">
                                       
                                        <div class="icon-box-content table-cell">
                                            <div class="icon-box-title">
                                                <h4 class="icon-title">Outros meios</h4>
                                            </div>
                                            <div class="icon-box-content">
                                                <p class="mb-1">Email.
                                                    <span class="color-a">GestOutdooor@gmail.com</span>
                                                </p>
                                                <p class="mb-1">Phone.
                                                    <span class="color-a">+244 936 221 483</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Single-->

        </main><!-- End #main -->
        <?php
        include_once("../footer.php");
        ?>
    </section><!-- End Latest Properties Section -->  
    <script src="../scripts/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../scripts/bootstrap/swiper-bundle.min.js" type="text/javascript"></script>
    <script src="../scripts/bootstrap/main.js" type="text/javascript"></script>

</body>

</html>