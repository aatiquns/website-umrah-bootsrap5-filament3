

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="card mt-4" style="border-radius: 1rem !important;">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item active">
                        <img src="<?php echo e(Storage::url($slider->image)); ?>" class="d-block w-100" alt="<?php echo e($slider->title); ?>">
                    </div>                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row" style="margin-top: 150px;">
            <div class="col-lg-3 mb-5">
                <div class="card card-umrah">
                    <div class="card-body">
                        <span><i class='bx bx-dollar'></i></span>
                        <h4 class="text-center card-title mt-3">Harga Bersaing</h4>
                        <p class="card-text text-center mt-3">Dapatkan harga paket Umrah & Haji maupun komponen lainnya
                            dengan penawaran
                            harga terbaik dari kami. Harga kami jujur dan bersaing
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="card card-umrah">
                    <div class="card-body">
                        <span><i class='bx bx-briefcase'></i></span>
                        <h4 class="text-center card-title mt-3">Pemesanan Mudah</h4>
                        <p class="card-text text-center mt-3">Pemesanan paket Umrah & Haji serta komponennya dengan
                            sangat mudah. Hanya 3 langkah mudah kurang dari 5 menit, transaksi anda akan selesai.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="card card-umrah">
                    <div class="card-body">
                        <span><i class='bx bxl-telegram'></i></span>
                        <h4 class="text-center card-title mt-3">
                            Layanan Luas</h4>
                        <p class="card-text text-center mt-3">Kami tidak hanya melayani paket Umrah & Haji tapi kami
                            juga melayani kebutuhan komponen lainnya seperti LA, Tiket, dan sebagainya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="card card-umrah">
                    <div class="card-body">
                        <span><i class='bx bxs-like'></i></span>
                        <h4 class="text-center card-title mt-3">Terpercaya</h4>
                        <p class="card-text text-center mt-3">Kami merupakan perusahaan travel resmi yang menjunjung
                            tinggi amanah dan kepercayaan konsumen sebagai tanggung jawab kami dalam melayani konsumen.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 150px;">
            <h3 style="font-size: 2rem;margin-bottom: 1.5rem;">Paket Umrah</h3>
            <?php $__currentLoopData = $umrah_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umrah_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
            <div class="col-lg-3 mb-5">
                <div class="card">
                    <img src="<?php echo e(Storage::url($umrah_package->thumbnail)); ?>" class="card-img-top" alt="<?php echo e($umrah_package->title); ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title">Card title</h5>
                        <span class="text-black-50"> <i class='bx bx-calendar'></i> <?php echo e($umrah_package->tanggal); ?> </span>
                        <p class="card-text fs-4 text-success"><?php echo e(number_format($umrah_package->price,0,'.','.')); ?></p>
                        <a href="<?php echo e(route('paket.show', $umrah_package->slug)); ?>" class="mx-auto text-center btn d-block btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row" style="margin-top: 150px;">
            <h3 style="font-size: 2rem;margin-bottom: 1.5rem;">Testimonial</h3>
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 mb-3">
                <div class="card p-3">
                    <img class="mx-auto mt-3" src="<?php echo e(Storage::url($testimonial->profile)); ?>"
                        style="object-fit: cover;width: 100px;height: 100px;border-radius: 100%;" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo e($testimonial->name); ?></h5>
                        <p class="card-text text-black-50"><?php echo $testimonial->testi; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\website-umroh\resources\views/frontend/home.blade.php ENDPATH**/ ?>