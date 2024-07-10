

<?php $__env->startSection('content'); ?>
<div class="container">

<nav aria-label="breadcrumb" style="margin-top: 50px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Paket Umrah</li>
    </ol>
</nav>

<div class="row justify-content-center" style="margin-top: 50px;">
    <h3 style="font-size: 2rem;margin-bottom: 1.5rem;">Paket Umrah</h3>
    <?php $__currentLoopData = $umrah_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umrah_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-3 mb-5">
        <div class="card">
            <img src="<?php echo e(Storage::url( $umrah_package->thumbnail )); ?>" class="card-img-top" alt="<?php echo e($umrah_package->title); ?>">
            <div class="card-body text-center">
                <h5 class="card-title"><?php echo e($umrah_package->title); ?></h5>
                <span class="text-black-50"> <i class='bx bx-calendar'></i><?php echo e($umrah_package->tanggal); ?></span>
                <p class="card-text fs-4 text-success">IDR <?php echo e(number_format($umrah_package->price,0,'.',',')); ?></p>
                <a href="<?php echo e(route('paket.show', $umrah_package->slug)); ?>" class="mx-auto text-center btn d-block btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\website-umroh\resources\views/frontend/package/index.blade.php ENDPATH**/ ?>