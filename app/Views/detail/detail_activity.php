<?= $this->extend('layouts/app');; ?>
<?= $this->section('content');; ?>
<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Our Activity</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Our Activity</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Single Product Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <h1>
            <a href="<?= site_url('activity'); ?>" class="text-dark">
                <i class="bi bi-arrow-left-circle-fill text-dark"></i> Back
            </a>
        </h1>
        <div class="row g-4 mb-5">
            <div>
                <h2 class="text-center py-3"><?= $aktivitas['nama_aktivitas_en']; ?></h2>
                <div class="border rounded">
                    <a href="#">
                        <img src="<?= base_url('images/' . $aktivitas['foto_aktivitas']); ?>" class="img-fluid rounded w-auto" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content mb-5">
                    <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <p class="text-dark">
                        <h2><b><?= $aktivitas['nama_aktivitas_en']; ?></b></h2>
                        </p>
                        <p class="text-dark"><?= $aktivitas['deskripsi_aktivitas_en']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-lg-4 col-xl-3">
                <div class="row g-4 fruite">
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mb-4">Another Activity</h4>
                        <section id="card1" class="card-menu-produk my-3">
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
                        <section id="card1" class="card-menu-produk my-3">
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
                        <section id="card1" class="card-menu-produk my-3">
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
                </div>
            </div> -->

    </div>
</div>
<!-- Single Product End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
<?= $this->endsection('content');; ?>