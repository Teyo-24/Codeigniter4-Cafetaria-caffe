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
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/biji-kopi.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
                    <h3>Manfaat Kopi</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        <i class="bi bi-calendar-week"> 20-02-2024</i>
                        <a href="<?= site_url('detail-article'); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/random.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
                    <h3>Manfaat Kopi</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        <i class="bi bi-calendar-week"> 20-02-2024</i>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/biji-kopi.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
                    <h3>Manfaat Kopi</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        <i class="bi bi-calendar-week"> 20-02-2024</i>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>