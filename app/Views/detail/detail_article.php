<?= $this->extend('layouts/app');; ?>
<?= $this->section('content');; ?>
<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Our Article</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Our Article</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Single Product Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <h1>
            <a href="<?= site_url('article'); ?>" class="text-dark">
                <i class="bi bi-arrow-left-circle-fill text-dark"></i> Back
            </a>
        </h1>
        <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                    <div>
                        <h2 class="text-center">Manfaat Kopi</h2>
                        <div class="border rounded">
                            <a href="#">
                                <img src="images/biji-kopi.jpg" class="img-fluid rounded w-auto" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                    id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                    aria-controls="nav-about" aria-selected="true">Description</button>
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p class="text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
                                    Susp endisse ultricies nisi vel quam suscipit </p>
                                <p class="text-dark">Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish filefish Antarctic
                                    icefish goldeye aholehole trumpetfish pilot fish airbreathing catfish, electric ray sweeper.</p>
                                <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="row g-4 fruite">
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mb-4">Another Article</h4>
                        <section id="card1" class="card-menu-produk my-3">
                            <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                                <img src="<?= base_url('images/kopi1.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                                <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                            </svg>
                            <div class="card__content">
                                <p class="card__title">Temukan Inspirasi di Cafetaria Caffee</p>
                                <p class="card__description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                                    justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                                    tincidunt augue id, efficitur massa.
                                </p>
                            </div>
                        </section>
                        <section id="card1" class="card-menu-produk my-3">
                            <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                                <img src="<?= base_url('images/random.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                                <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                            </svg>
                            <div class="card__content">
                                <p class="card__title">Lingkungan yang Nyaman</p>
                                <p class="card__description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae
                                    justo vel lorem tincidunt ultrices at non nunc. Donec in sapien viverra,
                                    tincidunt augue id, efficitur massa.
                                </p>
                            </div>
                        </section>
                        <section id="card1" class="card-menu-produk my-3">
                            <svg viewBox="0 0 16 16" fill="currentColor" height="40" width="0" xmlns="http://www.w3.org/2000/svg">
                                <img src="<?= base_url('images/rock.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                                <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"></path>
                            </svg>
                            <div class="card__content">
                                <p class="card__title">Hadiah untuk pengunjung</p>
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
        </div>
    </div>
</div>
<!-- Single Product End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
<?= $this->endsection('content');; ?>