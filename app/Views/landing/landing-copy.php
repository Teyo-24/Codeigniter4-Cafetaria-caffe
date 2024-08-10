<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('images/kopi1.jpg'); ?>" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/es.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/makanan1.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
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
<div class="container py-5">
    <h3 class="judul-about text-center">About Us</h3>
    <h1 class="header-cafe text-center">Welcome to Cafetaria Caffee</h1>
</div>
<div class="about">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <img class="logo-cafe img-fluid" src="images/cafetaria.png" alt="logo-kopi">
            </div>
            <div class="col-lg-8">
                <h3><b>Cafetaria Caffee</b></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="py-3">
                    <button class="button">
                        <span class="button-content">Read More </span>
                    </button>

                    <!-- <button href="#" class="btn btn-secondary w-25">Read More</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="container py-5">
        <div>
            <h3 class="judul-about text-center">Menu & Service</h3>
        </div>
        <h1 class="hearder-cafe text-center"><b>Our Product</b></h1>
        <div class="d-flex justify-content-end align-items-center">
            <ul class="list-inline mb-0" id="product-menu">
                <li class="list-inline-item btn btn-outline-warning rounded-pill active"><a href="#">All Product</a></li>
                <li class="list-inline-item btn btn-outline-warning rounded-pill"><a href="#">Food</a></li>
                <li class="list-inline-item btn btn-outline-warning rounded-pill"><a href="#">Drink</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <section id="card1" class="card-menu-produk">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                        <img src="<?= base_url('images/kopi1.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                    </svg>
                    <div class="card__content">
                        <p class="card__title">Lorem Ipsum</p>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                            justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                            tincidunt augue id, efficitur massa.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <section id="card1" class="card-menu-produk">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                        <img src="<?= base_url('images/makanan1.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                    </svg>
                    <div class="card__content">
                        <p class="card__title">Lorem Ipsum</p>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                            justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                            tincidunt augue id, efficitur massa.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <section id="card1" class="card-menu-produk">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                        <img src="<?= base_url('images/es.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                    </svg>
                    <div class="card__content">
                        <p class="card__title">Lorem Ipsum</p>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                            justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                            tincidunt augue id, efficitur massa.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <section id="card1" class="card-menu-produk">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                        <img src="<?= base_url('images/juice.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                    </svg>
                    <div class="card__content">
                        <p class="card__title">Lorem Ipsum</p>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                            justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                            tincidunt augue id, efficitur massa.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <section id="card1" class="card-menu-produk">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                        <img src="<?= base_url('images/kentang.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                    </svg>
                    <div class="card__content">
                        <p class="card__title">Lorem Ipsum</p>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                            justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                            tincidunt augue id, efficitur massa.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <section id="card1" class="card-menu-produk">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                        <img src="<?= base_url('images/milk.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                    </svg>
                    <div class="card__content">
                        <p class="card__title">Lorem Ipsum</p>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                            justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                            tincidunt augue id, efficitur massa.
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="button">
                <span class="button-content">Read More </span>
            </button>
        </div>
    </div>
</div>
<section class="activity py-5">
    <div class="container">
        <div>
            <h3 class="judul-about text-center">Events</h3>
        </div>
        <h1 class="hearder-cafe text-center"><b>Activity Caffe</b></h1>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('images/rock.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                    <div class="card-body">
                        <h4 class="text-center"><b>Rock Concert</b></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-evenly   ">
                            <i class="bi bi-calendar-week"> 20-02-2024 </i>
                            <i class="bi bi-person">Admin</i>
                            <a href="" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('images/piala.jpg'); ?>" class="card-img-top img-fluid card-img-fixed alt=" ...">
                    <div class="card-body">
                        <h4 class="text-center"><b>Nobar Piala AFF</b></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-evenly   ">
                            <i class="bi bi-calendar-week"> 20-02-2024 </i>
                            <i class="bi bi-person">Admin</i>
                            <a href="" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('images/ml.jpeg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                    <div class="card-body">
                        <h4 class="text-center"><b>Mobile Legend Tournament</b></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-evenly   ">
                            <i class="bi bi-calendar-week"> 20-02-2024 </i>
                            <i class="bi bi-person">Admin</i>
                            <a href="" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection('content'); ?>