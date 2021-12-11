

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
  <div class="d-flex flex-column w-50">
    <div class="row d-flex justify-content-between w-100">
      <h1 class="mb-3">Available Positions</h1>
      <a href="<?php echo e(route('registration.edit', request()->id)); ?>" class="btn btn-secondary mt-3 align-self-baseline">Back</a>
    </div>
    <div class="rows row-cols-1 row-cols-md-3 d-flex" >
        <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo e($position->job); ?></h5>
                <p class="card-text"><?php echo e($position->description); ?></p>
                <a href="<?php echo e(route('guestQualification.create', $position->id)); ?>" class="card-link">Apply Now</a>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/qualification/index.blade.php ENDPATH**/ ?>