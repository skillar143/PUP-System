

<?php $__env->startSection('admin'); ?>
<div class="d-flex flex-column">
    <h3 class="mb-3">Available Positions</h3>
    <div class="row row-cols-1 row-cols-md-2">
       <?php $__empty_1 = true; $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php $__currentLoopData = $job->positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col mb-2">
                    <div class="card" style="width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title"><?php echo e($position->job); ?></h5>
                         <p class="card-text"><?php echo e($position->description); ?></p>
                         <a href="<?php echo e(route('qualification.create', $position->id)); ?>" class="card-link">Set Qualifications</a>
                       </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
           
       <?php endif; ?>
    </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/admin/position/positions.blade.php ENDPATH**/ ?>