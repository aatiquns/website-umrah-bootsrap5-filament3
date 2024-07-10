

<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row justify-content-center mt-5">
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('paket')); ?>">Paket Umrah</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($umrah_package->title); ?></li>
            </ol>
        </nav>
    </div>
</div>

<div class="row justify-content-center mt-2">
    <div class="col-lg-10">
        <div class="card px-3 py-3">
            <img class="rounded" src="<?php echo e(Storage::url($umrah_package->thumbnail)); ?>" alt="<?php echo e($umrah_package->title); ?>">
            <hr>
            <h5 class="text-success">
                Daftar Hotel
            </h5>
            <ul class="list-group">
            <?php $__currentLoopData = $umrah_package->hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">

                    <div style="column-gap: 1rem;" class="d-flex align-items-center">
                        <img width="100" height="100" class="rounded img-fluid" src="<?php echo e(Storage::url($hotel->image)); ?>"
                            alt="<?php echo e($hotel->title); ?>">
                        <?php echo e($hotel->title); ?>

                    </div>
                    <span class="badge bg-primary rounded-pill p-2"><?php echo e($hotel->kota); ?></span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <hr>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            <h5 class="text-success">Itinery</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="collapse-inner align-left output-itinerary">
                                <?php echo $umrah_package->itenary; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            <h5 class="text-success">Fasilitas</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $umrah_package->fasilitas; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <h5 class="text-success">Persyaratan Peserta</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $umrah_package->persyaratan; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFor" aria-expanded="false"
                            aria-controls="flush-collapseFor">
                            <h5 class="text-success">Syarat & Ketentuan</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseFor" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $umrah_package->syarat; ?></div>
                    </div>
                </div>
            </div>
            <hr>

            <a href="https://www.tiket.com/" class="btn btn-primary">Booking Sekarang</a>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\website-umroh\resources\views/frontend/package/show.blade.php ENDPATH**/ ?>