

<?php $__env->startSection('content'); ?>
<div class="container-fluid w-50 d-flex justify-content-center align-items-center">
  <form class="w-50" action="<?php echo e(route('registration.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
          <label for="mobile_number">Mobile Number</label>
          <input type="text" class="form-control" id="mobile_number" name="mobile_number">
      </div>
      <div class="form-group">
          <label for="nationality">Nationality</label>
          <input type="text" class="form-control" id="nationality" name="nationality">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\pup-loginsystem\resources\views/registration/create.blade.php ENDPATH**/ ?>