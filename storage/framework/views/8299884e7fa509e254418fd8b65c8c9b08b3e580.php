

<?php $__env->startSection('content'); ?>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 85vh;  background-image: url('<?php echo e(asset('img/image1.png')); ?>'); background-repeat: no-repeat; background-size: cover">
    <div class="col">
        </div>
    <div class="col">
        </div>
    <div class="col">
        <h1 class="text-dark">Become a part of our Company</h1>
        <h5 class="text-dark">Staying at home can be an opportunity to get your dream job in Tech, with the No. 1 Company in the Philippines.</h5>
        <a href="<?php echo e(route('registration.create')); ?>" class="btn btn-sm btn-danger m-3">Apply Now!</a>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 85vh;  ">
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\pup-loginsystem\resources\views/registration/index.blade.php ENDPATH**/ ?>