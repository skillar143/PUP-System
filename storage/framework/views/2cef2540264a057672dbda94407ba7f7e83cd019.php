

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admin'); ?>
<div class="d-flex flex-column">
    <div class="row">
        <div class="jumbotron jumbotron-fluid w-100">
            <div class="container w-100">
                <h3 class="mb-3">Set Qualification for</h3>
                <h3 class="display-4"><?php echo e($position->job); ?></h3>
                <p class="lead"><?php echo e($position->description); ?></p>
            </div>
        </div>
    </div>
    <div class="row p-2">

        <?php $__env->startComponent('components.forms.educational_attainment'); ?>
            <?php $__env->slot('position_id'); ?>
                <?php echo e($position->id); ?>

            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginalb1503e19b862f7a9c9aeab9cfc19fd12062b794d)): ?>
<?php $component = $__componentOriginalb1503e19b862f7a9c9aeab9cfc19fd12062b794d; ?>
<?php unset($__componentOriginalb1503e19b862f7a9c9aeab9cfc19fd12062b794d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('components.forms.years_of_experience'); ?>
            <?php $__env->slot('position_id'); ?>
                <?php echo e($position->id); ?>

            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginald140341a5e3bb8320d5b00f464aa24ac6015b9b0)): ?>
<?php $component = $__componentOriginald140341a5e3bb8320d5b00f464aa24ac6015b9b0; ?>
<?php unset($__componentOriginald140341a5e3bb8320d5b00f464aa24ac6015b9b0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('components.forms.employment_type'); ?>
            <?php $__env->slot('position_id'); ?>
                <?php echo e($position->id); ?>

            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginal8c3d60c3fac835487250cec2411dce7c67b4d7f5)): ?>
<?php $component = $__componentOriginal8c3d60c3fac835487250cec2411dce7c67b4d7f5; ?>
<?php unset($__componentOriginal8c3d60c3fac835487250cec2411dce7c67b4d7f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

        <?php $__env->startComponent('components.forms.working_shifts'); ?>
            <?php $__env->slot('position_id'); ?>
                <?php echo e($position->id); ?>

            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginal8331bd4497016e465a6d666b87511cfbaf82e919)): ?>
<?php $component = $__componentOriginal8331bd4497016e465a6d666b87511cfbaf82e919; ?>
<?php unset($__componentOriginal8331bd4497016e465a6d666b87511cfbaf82e919); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/admin/qualification/create.blade.php ENDPATH**/ ?>