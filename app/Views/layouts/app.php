<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetaria Caffee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/img.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <img src="<?= base_url('/images/cafe2.png') ?>" alt="Cafe Image" class="img-cafe text-white">
            <a class="navbar-brand text-white" href="#"><b>Cafetaria Caffee</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?= site_url('/landing'); ?>"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= site_url('product'); ?>"><b>Product</b> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= site_url('article'); ?>"><b>Articles</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= site_url('activity'); ?>"><b>Activity</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><b>Contact</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="">
        <footer class="text-white text-center text-lg-start bg-dark">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 me-5 text-center">About company</h5>

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
                        <h5 class="text-uppercase mb-4 pb-1">Contact</h5>
                        <ul class="fa-ul">
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Warsaw, 00-967, Poland</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">contact@example.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48 234 567 88</span>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 text-center">Opening hours</h5>

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
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('#product-menu .list-inline-item');

            menuItems.forEach(item => {
                item.addEventListener('click', function(event) {
                    // Prevent default anchor behavior
                    event.preventDefault();

                    // Remove active class from all menu items
                    menuItems.forEach(item => item.classList.remove('active'));

                    // Add active class to the clicked menu item
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>