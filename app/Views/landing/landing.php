<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?><!-- Hero Start -->
<div id="carouselExampleCaptions" class="carousel slide py-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('images/kopi1.jpg'); ?>" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-6 text-white">Coffee</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/juice.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-6 text-white">Non-Coffee Drinks</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/makanan1.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-6 text-white">Food & Snack</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Hero End -->

<!-- Banner Section Start-->
<div class="container py-5">
    <h3 class="judul-about text-center">About Us</h3>
    <h1 class="header-cafe text-center">Welcome to Cafetaria Caffee</h1>
</div>
<div class="container-fluid banner">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="position-relative d-flex justify-content-evenly">
                    <img src="images/cafe1.png" class="img-fluid w-50 rounded" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="py-4">
                    <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="">
                    <a href="<?= site_url('about'); ?>"
                        class="button btn border-2 border-dark rounded-pill py-3 px-5 text-white d-flex align-items-center justify-content-center mx-auto mx-lg-0">
                        <span class="button-content">Read More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Fruits Shop Start-->
<div class="container-fluid fruite">
    <div class="container py-5">
        <div class="tab-class text-center">
            <div class="row g-4 justify-content-center text-center">
                <div class="col-12">
                    <h3 class="judul-about">Menu & Service</h3>
                </div>
                <div class="col-lg-4 col-12">
                    <h1>Our Products</h1>
                </div>
                <div class="col-lg-8 col-12">
                    <ul class="nav nav-pills justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 130px;">All Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 130px;">Coffee</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 130px;">Non-Coffee</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 130px;">Food</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/kopi1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Coffe</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Cappuccino</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/makanan1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Food</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Nasi Goreng</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/es.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Non-Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Ice Cocolate</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/juice.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Non-Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Fruite Juice</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/kentang.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Food</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Kentang Goreng</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/milk.jpg" class="img-fluid w-10 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Non-Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Mils Shake</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/makanan1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Food</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Nasi Goreng</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/latte.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Latte</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/kopi1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Coffe</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Cappuccino</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/latte.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Coffee Latee</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/es.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Non-Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Ice Cocolate</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/juice.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Non-Coffee</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Fruite Juice</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/makanan1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Food</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Nasi Goreng</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="images/kentang.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Food</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Kentang</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-3.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Banana</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-2.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Raspberries</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Oranges</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vesitable Shop Start-->
<div class="container-fluid vesitable">
    <div class="container py-5">
        <div class="col-lg-4 text-center">
            <h1 class="display-6">New Products</h1>
        </div>
        <div class="owl-carousel vegetable-carousel justify-content-center">
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="images/kentang.jpg"" class=" img-fluid card-img-fixed w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Food</div>
                <div class="p-4 rounded-bottom">
                    <h4>French fries</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="images/kopi1.jpg" class=" img-fluid card-img-fixed w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Coffee</div>
                <div class="p-4 rounded-bottom">
                    <h4>Cappuccino</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="images/es.jpg" class=" img-fluid card-img-fixed w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Non-Cofee</div>
                <div class="p-4 rounded-bottom">
                    <h4>Ice Coccolate</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                </div>
            </div>
            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                    <img src="images/juice.jpg" class=" img-fluid card-img-fixed w-100 rounded-top" alt="">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                <div class="p-4 rounded-bottom">
                    <h4>Fruite Juice</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="activity py-5">
    <div class="testimonial-header text-center">
        <h1 class="display-6 mb-5 text-dark">Our Activity!</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/rock.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="Rock Concert">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Rock Concert</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-activity'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/piala.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="Nobar Piala AFF">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Nobar Piala AFF</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-activity'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/ml.jpeg" class="img-fluid w-100 card-img-fixed rounded-top" alt="Mobile Legend Tournament">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Mobile Legend Tournament</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-activity'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endsection('content'); ?>