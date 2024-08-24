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
        <h2 class="judul-about text-center">Product Menu</h2>
    </div>
    <div class="row">
        <?php foreach ($data as $item) : ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100 d-flex flex-column">
                    <div class="row g-0 flex-grow-1">
                        <div class="col-md-4">
                            <img src="<?= base_url('images/' . $item['foto_produk']); ?>" class="img-fluid card-img-fixed rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title judul-about"><?= $item['nama_produk_en']; ?></h5>
                                <p class="text-dark mb-0"><?= $item['deskripsi_produk_en']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="<?= site_url('detail-product'); ?>" class="stretched-link"></a> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endsection('content'); ?>