

<?php $__env->startSection('admin'); ?>
<div class="container">
    <form action="<?php echo e(route('position.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="job">Job Title</label>
          <input type="text" class="form-control" id="job" name="job">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/admin/position/create.blade.php ENDPATH**/ ?>