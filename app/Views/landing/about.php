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
                    <div class="d-flex flex-column flex-md-row justify-content-evenly align-items-center py-4">
                        <h3 class="judul-about text-center mb-3 mb-md-0"><i class="fas fa-concierge-bell text-warning"></i> Best Services</h3>
                        <h3 class="judul-about text-center"><i class="bi bi-award-fill text-warning"></i> Good Facilities</h3>
                    </div>
                    <p class="paragraf-about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <img src="images/cafe1.png" class="img-fluid w-50 rounded" alt="Cafe Image">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featurs Section Start -->
<div class="container-fluid featurs mb-5">
    <div class="container">
        <div class="row g-4">
            <h3 class="judul-about text-center">What will you get</h3>
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