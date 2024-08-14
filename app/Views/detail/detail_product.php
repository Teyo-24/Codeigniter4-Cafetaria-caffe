<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Coffee</h1>
</div>
<!-- Banner Section Start-->
<div class="container-fluid banner bg-white">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="border rounded">
                    <img src="images/kopi1.jpg" class="img-fluid rounded w-auto" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <h2 class="display-3 text-dark text-center">Cappucinoo</h2>
                <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>