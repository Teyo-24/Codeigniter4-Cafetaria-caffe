<?php $this->setVar('title', 'About');; ?>
<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">About</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">About</li>
    </ol>
</div>
<!-- Banner Section Start-->
<div class="container-fluid banner bg-white">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="py-4">
                    <h3 class="display-6 text-dark text-center">Welcome To Cafetaria Caffe</h3>
                    <!-- <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p> -->
                    <div class="d-flex justify-content-between py-4">
                        <h3 class="judul-about"><i class="fas fa-concierge-bell text-warning"></i> Best Services</h3>
                        <h3 class="judul-about"><i class="bi bi-award-fill text-warning"></i> Good Facilities</h3>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative d-flex justify-content-evenly">
                    <img src="images/cafe1.png" class="img-fluid w-50 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featurs Section Start -->
<div class="container-fluid featurs mb-5">
    <div class="container">
        <div class="row g-4">
            <h3 class="judul-about text-center">Take us with you</h3>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-utensils fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Food & Drink</h5>
                        <p class="mb-0">Bukan hanya kopi tersedia berbagai macam makan, minuman dan snack untuk kamu. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-shopping-bag  fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>COFFEE PACK</h5>
                        <p class="mb-0">Dalam kemasan 200gr, kamu bisa menikmati kopi paket Coffee yang dapat di bawa pulang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas  fa-gift fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>MERCHANDISE</h5>
                        <p class="mb-0"> Berbagai pilihan merchandise untuk kamu yang yang datang di cafetaria caffee</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-door-open fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>OPEN</h5>
                        <p class="mb-0">Buka 24 jam buat kamu yang lelah bekerja sampai larut malam (jangan lupa isntirahat yah!).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featurs Section End -->
<?= $this->endsection('content'); ?>