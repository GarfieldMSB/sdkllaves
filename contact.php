<!DOCTYPE html>
<html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>SDK</title>

        <link rel="shortcut icon" type="image/x-icon" href="/images/logo.ico" />
        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
    </head>

    <body class="sub_page">
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="index.php">
                          <img src="images/logo.png" alt="">
                            <span>
                                Servicio de llaves
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="llaves.php"> Llaves</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="repuestos.php"> Repuestos y accesorios </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="service.php">Servicios </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contáctanos</a>
                                    </li>
                                </ul>
                            </div>            
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
        </div>

        <!-- contact section -->

        <section class="contact_section layout_padding">
            <div class="container">
                <div class="d-flex flex-column align-items-end">
                    <div class="custom_heading-container">
                        <hr>
                        <h2>
                            Contáctanos
                        </h2>
                    </div>
                </div>
                <div class="layout_padding-top layout_padding2-bottom">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="conection/sendmail.php" method="POST">
                                <div class="contact_form-container">
                                    <div>
                                        <div>
                                            <input type="text" placeholder="Nombre y apellido" name="name" required>
                                        </div>
                                        <div>
                                            <input type="email" placeholder="Correo" name="email" required>
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Mensaje o comentario" class="message_input" name="mesaje" required>
                                        </div>
                                        <div class="mt-5">
                                            <button type="submit" name="enviar">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            <div class="map-box">
                                <div id="map">
                                    <div class="map-responsive">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.159614590945!2d-71.54966438518751!3d-33.025925080897544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689de752380e5c5%3A0xaffff2809be1c6e7!2sCalle%20Valpara%C3%ADso%201070%2C%20Vi%C3%B1a%20del%20Mar%2C%20Valpara%C3%ADso!5e0!3m2!1ses-419!2scl!4v1584288384686!5m2!1ses-419!2scl"
                                            width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_items">

                    <a href="tel:56977242579">
                        <div class="item ">
                            <div class="img-box box-2">

                            </div>
                            <div class="detail-box">
                                <p>
                                    +56977242579
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="mailto:contacto@sdkllaves.cl">
                        <div class="item ">
                            <div class="img-box box-3">

                            </div>
                            <div class="detail-box">
                                <p>
                                    contacto@sdkllaves.cl
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="https://goo.gl/maps/qqKwQYs4fSv7x6nN8">
                        <div class="item ">
                            <div class="img-box box-1">

                            </div>
                            <div class="detail-box">
                                <p>
                                    Locación
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <!-- end contact section -->

        <!-- info section -->
        <section class="info_section layout_padding">
            <div class="container">
                <div class="info_social">
                    <div>
                        <a href="https://www.facebook.com/SDK-Servicio-de-llaves-101375641506637/">
                            <img src="images/fb.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/insta.png" alt="">
                        </a>
                    </div>
                </div>
                <div>
                    <h3>
                        Viña del mar
                    </h3>
                    <p>
                        Av.Valparaíso 1070, <b>Paseo Viña Centro</b>, centro Viña del Mar <br>
                        Interior Home Center (cosatado de servicios Falabella). 
                        <a href="contact.php" class="ubicacion">
                            <h5><u>Ubicación</u></h5>
                        </a>
                    </p>
                </div>
            </div>
        </section>

        <!-- end info_section -->

        <!-- footer section -->
        <section class="container-fluid footer_section">
            <p>
                &copy; 2020 Todos los derechos reservados
                <a href="index.php">Servicio de llaves SDK</a>
            </p>
        </section>
        <!-- footer section -->

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    </body>
</body>

</html>