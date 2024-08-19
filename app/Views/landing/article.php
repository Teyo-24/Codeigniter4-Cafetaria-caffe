<?php $this->setVar('title', 'Article');; ?>
<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Article</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Article</li>
    </ol>
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
                        <img src="images/biji-kopi.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="biji kopi">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Manfaat Kopi</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-article'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/random.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="lingkungan">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Lingkungan yang Nyaman</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-article'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/kopi1.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="kopi">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Temukan Ide dan Inspirasi</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-article'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/biji-kopi.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
                    <h3>Manfaat Kopi</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        <i class="bi bi-calendar-week"> 20-02-2024</i>
                        <a href="<?= site_url('detail-article'); ?>" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/random.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
                    <h3>Lingkungan yang Nyaman</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        <i class="bi bi-calendar-week"> 20-02-2024</i>
                        <a href="<?= site_url('detail-article'); ?>" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/kopi1.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
                    <h3>Temukan Ide dan Inspirasi</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        <i class="bi bi-calendar-week"> 20-02-2024</i>
                        <a href="<?= site_url('detail-article'); ?>" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endsection('content'); ?>