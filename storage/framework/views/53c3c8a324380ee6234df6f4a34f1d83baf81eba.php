

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <?php echo e(__('Position')); ?>

                    <a href="<?php echo e(Route::currentRouteName() == 'qualification.create' ? route('position.index') : route('position.create')); ?>" class="btn btn-sm btn-primary"><?php echo e(Route::currentRouteName() == 'qualification.create' ? 'Back' : 'Add'); ?></a>
                </div>

                <div class="card-body">
                    <?php echo $__env->yieldContent('admin'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/admin/index.blade.php ENDPATH**/ ?>