

<?php $__env->startSection('content'); ?>
    <div class="container-fluid w-50 d-flex justify-content-center align-items-center">
      <form class="w-50" action="<?php echo e(route('registration.update', $data->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo e($data->name); ?>">
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <select class="form-control" id="gender" name="gender" value="<?php echo e($data->gender); ?>">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="<?php echo e($data->dob); ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>">
        </div>
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="<?php echo e($data->mobile_number); ?>">
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo e($data->nationality); ?>">
        </div>
        
        <div class="from-row">
            <a onclick="document.getElementById('deleteFrm').submit()" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </form>
      <form action="<?php echo e(route('registration.destroy', $data->id)); ?>" method="POST" id="deleteFrm">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        
      </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/registration/edit.blade.php ENDPATH**/ ?>