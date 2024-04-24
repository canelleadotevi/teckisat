<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Teckisat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center pt-3">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <img src="{{ asset('img/teckisat.png') }}" class="img-fluid" alt="">
                    <h1 class="text-light"><a href="/"></a></h1>
                </div>

                <nav id="navbar" class="navbar ">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                        <li><a class="nav-link scrollto" href="#about">A propos</a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        </li>
                        <li><a class="getstarted scrollto" href="#contact">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>

            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->



    <main id="hero" class="d-flex align-items-center">
        <div class="container text-center " data-aos="fade-in" data-aos-delay="">
            <h1>Des solutions numériques répondant à vos besoins</h1>
            <h2>Teckisat, votre partenaire de confiance qui donne vie à vos projets</h2>
            <a href="#contact" class="btn-get-started scrollto">Rejoignez-nous</a>
        </div>
    </main>
    @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <div class="logo">
                            <img src="{{ asset('img/teckisat.png') }}"  width="120" height="80" alt="">
                            <h1 class="text-light"><a href="/"></a></h1>
                        </div>
                        <p>
                            Lot 1594 Tankpe, Abomey-Calavi, BENIN <br>
                            RCCM RB/ABC721 B 4293<br>
                            IFU 3202112896967 <br><br>
                            <strong>TéléPhone:</strong>+ 229 67 529 720<br>
                            <strong>Email:</strong>contact@teckisat.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#home">Accueil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms d'utilisation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Développement d'applications
                                    web</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Herbegement
                                    Web & Cloud</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Développement d'application
                                    mobile</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Développement logiciel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Conseils informatique</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>S'abonner à notre Newsletter</h4>
                        <p>Restez informer de toutes nos actualités !</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="S'abonner">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright 2023 <strong><span>Teckisat</span></strong>. Tous les droits réservés
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
