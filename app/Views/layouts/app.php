<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cafetaria Caffe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/cafetaria.png">

    <!-- Donts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>

    <!-- Spinner Start -->

    <!-- Spinner End -->



    <!-- Navbar start -->
    <div class="container-fluid bg-dark fixed-top">
        <div class="container topbar bg-secondary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Suekarno-Hatta, Malang</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Cafetaria@Example.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-dark navbar-expand-xl d-flex align-items-center">
                <a href="index.html" class="navbar-brand d-flex align-items-center">
                    <img src="<?= base_url('/images/cafe2.png') ?>" alt="Cafe Image" class="img-cafe" style="height: 50px; margin-right: 10px;">
                    <h1 class="text-white display-6 mb-0">Cafetaria Caffee</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-dark" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="<?= site_url('/'); ?>" class="nav-item nav-link text-white active">Home</a>
                        <a href="<?= site_url('product'); ?>" class="nav-item nav-link text-white">Product</a>
                        <a href="<?= site_url('article'); ?>" class="nav-item nav-link text-white">Article</a>
                        <a href="<?= site_url('activity'); ?>" class="nav-item nav-link active text-white">Activity</a>
                        <a href="<?= site_url('about'); ?>" class="nav-item nav-link text-white">About</a>
                        <a href="<?= site_url('contact'); ?>" class="nav-item nav-link text-white">Contact</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Language</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="#" class="dropdown-item text-dark">Indonesia</a>
                                <a href="#" class="dropdown-item text-dark">English</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div>
        <?= $this->renderSection('content'); ?>
    </div>

    <!-- Copyright Start -->
    <!-- Copyright End -->
    <div class="container-fluid">
        <footer class="text-white text-center text-lg-start bg-dark">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 me-5 text-center text-white">About company</h5>

                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti.
                        </p>

                        <p>
                            Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                            molestias.
                        </p>

                        <div class="mt-4">
                            <!-- instagram -->
                            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-instagram"></i></i></a>
                            <!-- whatsapp -->
                            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-whatsapp"></i></a>
                            <!-- facebook -->
                            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
                            <!-- envelope + -->
                            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0 d-flex flex-column align-items-center text-center">
                        <h5 class="text-uppercase mb-4 pb-1 text-white">Contact</h5>
                        <ul class="fa-ul">
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2"> Jln. Soekarno-Hatta</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">cafetaria@example.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48 234 567 88</span>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 text-center text-white">Opening hours</h5>

                        <table class="table table-dark text-center text-white">
                            <tbody class="fw-normal">
                                <tr>
                                    <td>Mon - Thu:</td>
                                    <td>8am - 9pm</td>
                                </tr>
                                <tr>
                                    <td>Fri - Sat:</td>
                                    <td>8am - 1am</td>
                                </tr>
                                <tr>
                                    <td>Sunday:</td>
                                    <td>9am - 10pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                &copy; 2024
                <a class="text-white" href="">Cafetaria Caffee. All Rights Reserved.</a>
            </div>
            <!-- Grid container -->
        </footer>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>