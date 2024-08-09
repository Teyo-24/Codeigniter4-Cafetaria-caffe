<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="container py-3 ">
    <div class="d-flex justify-content-center">
        <h3>Article</h3>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="<?= base_url('images/biji-kopi.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
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
                <img src="<?= base_url('images/random.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
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
                <img src="<?= base_url('images/nobar.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                <div class="card-body">
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