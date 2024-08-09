<?= $this->extend('layouts/app'); ?>
<?php $this->section('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('images/kopi1.jpg'); ?>" class="d-block w-100" alt="...">
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

<div class="container py-3 ">
    <div class="d-flex justify-content-center">
        <h3>Our Menu</h3>
    </div>
</div>
<div class="container">
    <div class="py-3">
        <h2>Coffee-Based Drinks</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/kopi1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/latte.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/black-coffe.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/kopi1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3">
        <h2>Non-Coffee Drinks</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/es.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/ice-drink.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/milk.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/juice.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3">
    </div>
    <div class="py-3">
        <h2>Food & Snack</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/sandwich.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/burger.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/nasi.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/kentang.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3">
    </div>
    <?= $this->endsection('content'); ?>