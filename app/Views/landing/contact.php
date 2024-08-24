<?php $this->setVar('title', 'Contact');; ?>
<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Contact</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Contact</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <?php foreach ($data as $item): ?>
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="display-6 "><?= $item['nama_perusahaan']; ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe class="rounded w-100"
                                style="height: 400px;" <?= $item['link_maps']; ?>
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3> <i class="fa fa-history"></i> <b>Story</b></h3>
                        <p><?= $item['deskripsi_perusahaan_en']; ?></p>
                    </div>
                    <div class="col-lg-5">
                        <h3> <i class="fas fa-map-marker-alt"></i> <b>Location</b></h3>
                        <p> <?= $item['deskripsi_kontak_en']; ?>
                        </p>
                    </div>
                    <div class="container">
                        <h2 class="text-center py-3">Contact Network</h2>
                        <h5 class="text-center mb-5">You can contact us via the following contact</h5>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fab fa-instagram-square fa-2x text-warning me-4"></i>
                                    <div>
                                        <h4>Instagram</h4>
                                        <p class="mb-2">@Cafetaria</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fab fa-whatsapp-square fa-2x text-warning me-4"></i>
                                    <div>
                                        <h4>WhatsApp</h4>
                                        <p class="mb-2"><?= $item['no_hp']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fab fa-facebook-square fa-2x text-warning me-4"></i>
                                    <div>
                                        <h4>Facebook</h4>
                                        <p class="mb-2">Cafetaria Caffee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-envelope-square fa-2x text-warning me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-2"><?= $item['email']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Contact End -->
<?= $this->endsection('content'); ?>