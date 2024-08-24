<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
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
    <div class="container">
        <h1>
            <a href="<?= site_url('article'); ?>" class="text-dark">
                <i class="bi bi-arrow-left-circle-fill text-dark"></i> Back
            </a>
        </h1>
        <div class="row g-4 mb-5 py-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                    <div>
                        <h2 class="text-center"><?= $tb_artikel['judul_artikel']; ?></h2>
                        <div class="border rounded">
                            <img src="<?= base_url('images/' . $tb_artikel['foto_artikel']) ?>" class="img-fluid rounded w-auto" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                    id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                    aria-controls="nav-about" aria-selected="true">
                                    <h4>Description</h4>
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p class="text-dark"><?= $tb_artikel['deskripsi_artikel']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <h4 class="mb-4">Another Article</h4>
                        <?php foreach ($another_artikel as $item) : ?>
                            <a href="<?= base_url('article/detail/' . $item['id_artikel']); ?>" class="text-white">
                                <section class="card-menu-produk my-3">
                                    <img src="<?= base_url('images/' . $item['foto_artikel']); ?>" class="img-fluid" alt="...">
                                    <div class="card__content">
                                        <p class="card__title text-white text-center"><?= $item['judul_artikel']; ?></p>
                                        <p class="card__description"><?= substr($item['deskripsi_artikel'], 0, 150);  ?> ... </p>
                                    </div>
                                </section>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
<?= $this->endsection('content'); ?>