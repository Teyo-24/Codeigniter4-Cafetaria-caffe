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
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                <div class="col-12">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h1 class="text-warning">Cafetaria Caffee</h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="h-100 rounded">
                        <iframe class="rounded w-100"
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6645.588101985907!2d112.6166672914562!3d-7.948174504565963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1723209881140!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3> <i class="bi bi-clock-history"></i> <b>Story</b></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="col-lg-5">
                    <h3> <i class="fas fa-map-marker-alt"></i> <b>Location</b></h3>
                    <p> Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
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
                                    <p class="mb-2">(+012) 3456 7890</p>
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
                                    <p class="mb-2">cafetaria@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?= $this->endsection('content'); ?>