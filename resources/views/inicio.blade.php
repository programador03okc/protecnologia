<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Protecnología">
    <title>Protecnología</title>
</head>
    <link href="{{ asset('assets/img/icono.png') }}" rel="shortcut icon" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
<body>
    <div class="se-pre-con"></div>

    <header id="home">
        <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo_ptc_negativo.png') }}" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('assets/img/logo_ptc_positivo.png') }}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li><a class="smooth-menu" href="#">Inicio</a></li>
                        <li><a class="smooth-menu" href="#about">Nosotros</a></li>
                        <li><a class="smooth-menu" href="#features">Portafolio</a></li>
                        <li><a class="smooth-menu" href="#customers">Clientes</a></li>
                        <li><a class="smooth-menu" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Banner -->
    <div class="banner-area bg-bottom text-light text-default" style="background-image: url(images/banner/banner_1.png);">
        <div class="container">
            <div class="double-items">
                <div class="row align-center">
                    <div class="col-lg-12 text-center info">
                        <h2 class="wow fadeInRight" data-wow-defaul="300ms" style="margin-top: -140px;">
                            Innovación y garantia en soluciones de tecnologia, computo y proteccion de la salud
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portafolio -->
    <div id="features" class="advanced-features-area text-center default-padding bottom-less">
        <div class="right-shape">
            <img src="{{ asset('images/shape/17.png') }}" alt="fondo_ptc_portafolio">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="color-theme">Nuestro Portafolio</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill">
            <div class="af-items">
                <div class="row">
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <img src="{{ asset('images/portafolio/portafolio_1.png') }}" alt="equipo_tecnologico_ptc">
                           <div class="info">
                               <h4>Equipamiento tecnológico</h4>
                           </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <img src="{{ asset('images/portafolio/portafolio_2.png') }}" alt="soluciones_impresion_suministro_ptc">
                           <div class="info">
                               <h4>Soluciones de impresión y suministro</h4>
                           </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <img src="{{ asset('images/portafolio/portafolio_3.png') }}" alt="soluciones_educacion_interactiva_ptc">
                           <div class="info">
                               <h4>Soluciones de educación interactivas</h4>
                           </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <img src="{{ asset('images/portafolio/portafolio_4.png') }}" alt="licenciamiento_software_ptc">
                           <div class="info">
                               <h4>Licenciamiento de software</h4>
                           </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <img src="{{ asset('images/portafolio/portafolio_5.png') }}" alt="equipos_proteccion_personal_ptc">
                           <div class="info">
                               <h4>Soluciones de videovigilancia</h4>
                           </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                           <img src="{{ asset('images/portafolio/portafolio_6.png') }}" alt="soluciones_videovigilancia_ptc">
                           <div class="info">
                               <h4>Equipos de protección personal</h4>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nosotros -->
    <div id="about" class="about-area bg-gray default-padding overflow-hidden">
        <div class="fixed-shape" style="background-image: url(images/shape/5.png);"></div>
        <div class="container">
            <div class="about-content">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumbs">
                            <img class="wow fadeInLeft" data-wow-delay="300ms" src="{{ asset('images/empresa/nosotros.png') }}" alt="nosotros_ptc">
                        </div>
                    </div>
                    <div class="col-lg-6 info wow fadeInRight">
                        <h4 style="color: #000;">PROTECNOLOGIA</h4>
                        <h2 class="color-theme">Sobre Nosotros</h2>
                        <p style="margin-right: 60px; text-align: justify;">
                            Somos uno de los principales proveedores de equipamiento tecnológico, así como también de insumos de protección para el sector público y privado
                            <br>
                            Nuestra alta calidad de servicio nos ha posicionado en el TOP 5 de Perú Compras, plataforma de comercio electrónico del estado
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clientes -->
    <div id="customers" class="features-area text-center default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="area-title color-theme">Ellos confían en nostros</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_1.png') }}" alt="cliente_sunafil">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_2.png') }}" alt="cliente_unj">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_3.png') }}" alt="cliente_jfsc">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_4.png') }}" alt="cliente_unsa">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_5.png') }}" alt="cliente_unt">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_6.png') }}" alt="cliente_gore_moq">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_7.png') }}" alt="cliente_muni_ilo">
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item customer">
                            <img src="{{ asset('images/cliente/clientes_8.png') }}" alt="cliente_minjus">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-theme text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('assets/img/logo_ptc_negativo.png') }}" alt="logo_ptc">
                            <p>
                                Si tienes alguna consulta, podemos ayudarte a resolverla.
                                <br>
                                Envíanos tu correo electrónico y nos comunicaremos contigo.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 item">
                        <div class="f-item about" id="contact">
                            <form action="{{ route('mail.contact') }}" method="POST"   >
                                @csrf
                                @if (session('info'))
                                    <div class="alert alert-success" role="alert">
                                        Su correo fue envíado con éxito
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Nombres y apellidos" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Correo electrónico*" type="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Teléfono/Celular" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Escribe tu mensaje" rows="4" style="resize: none;" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-block btn-form-contact"    >Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Información de contacto</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Dirección:</strong>
                                            Lima.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Correo:</strong>
                                            <a href="mailto:equino@protecnologia.com">equino@protecnologia.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
										{{-- <div class="content">
                                             <strong>Teléfono:</strong>
                                             <a href="tel:999336065">+51 999 336 065</a>
                                        </div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Protecnologia &copy; Copyright 2022.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>
