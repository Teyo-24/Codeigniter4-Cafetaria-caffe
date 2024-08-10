<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Activity</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Activity</li>
    </ol>
</div>
<section class="activity py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('images/rock.jpg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                    <div class="card-body">
                        <h4 class="text-center"><b>Rock Concert</b></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-evenly   ">
                            <i class="bi bi-calendar-week"> 20-02-2024 </i>
                            <i class="bi bi-person">Admin</i>
                            <a href="" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('images/piala.jpg'); ?>" class="card-img-top img-fluid card-img-fixed alt=" ...">
                    <div class="card-body">
                        <h4 class="text-center"><b>Nobar Piala AFF</b></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-evenly   ">
                            <i class="bi bi-calendar-week"> 20-02-2024 </i>
                            <i class="bi bi-person">Admin</i>
                            <a href="" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('images/ml.jpeg'); ?>" class="card-img-top img-fluid card-img-fixed" alt="...">
                    <div class="card-body">
                        <h4 class="text-center"><b>Mobile Legend Tournament</b></h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-evenly   ">
                            <i class="bi bi-calendar-week"> 20-02-2024 </i>
                            <i class="bi bi-person">Admin</i>
                            <a href="" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection('content'); ?>