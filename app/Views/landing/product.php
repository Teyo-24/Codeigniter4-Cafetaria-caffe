<?php $this->setVar('title', 'Product'); ?>
<?= $this->extend('layouts/app'); ?>
<?php $this->section('content'); ?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Product</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Product</li>
    </ol>
</div>

<div class="container">
    <div class="py-5">
        <h2 class="judul-about">Coffee-Based Drinks</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <a href="<?= site_url('detail-product'); ?>">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/kopi1.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">Cappuccino</h5>
                                <p class="text-dark">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <a href="<?= site_url('detail-product'); ?>">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/latte.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">Coffee Latte</h5>
                                <p class="text-dark">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/black-coffe.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Black Coffee</h5>
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
                        <img src="images/kopi1.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
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
        <h2 class="judul-about">Non-Coffee Drinks</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/es.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Coccolate Ice</h5>
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
                        <img src="images/ice-drink.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Ice Tea</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/milk.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Milk Shake</h5>
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
                        <img src="images/juice.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Fruite Juice</h5>
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
        <h2 class="judul-about">Food & Snack</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/sandwich.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Sandwich</h5>
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
                        <img src="images/burger.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Super Burger</h5>
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
                        <img src="images/nasi.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">Fried Rice</h5>
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
                        <img src="images/kentang.jpg" class="img-fluid card-img-fixed rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="card-title">French Fries</h5>
                            <p>With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3">
    </div>
</div>
<?= $this->endsection('content'); ?>