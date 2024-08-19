<?php $this->setVar('title', 'Activity');; ?>
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
    <div class="testimonial-header text-center">
        <h1 class="display-6 mb-5 text-dark">Our Activity!</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/rock.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="Rock Concert">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Rock Concert</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-activity'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/piala.jpg" class="img-fluid w-100 card-img-fixed rounded-top" alt="Nobar Piala AFF">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Nobar Piala AFF</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-activity'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4"> <!-- Menyesuaikan lebar card -->
                <div class="card h-100 d-flex flex-column">
                    <div class="fruite-img">
                        <img src="images/ml.jpeg" class="img-fluid w-100 card-img-fixed rounded-top" alt="Mobile Legend Tournament">
                    </div>
                    <div class="p-4 border-top-0 rounded-bottom d-flex flex-column flex-grow-1">
                        <h4 class="card-title text-center">Mobile Legend Tournament</h4>
                        <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span><i class="bi bi-calendar-week"></i> 20-02-2024</span>
                            <a href="<?= site_url('detail-activity'); ?>" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection('content'); ?>