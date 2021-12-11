<form class="w-100" action="<?php echo e(route('qualification.store', $position_id )); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" value="" name="qualified" id="employmentQualified" hidden>
    <div class="card mb-3 w-100">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Employement Type</h4>
            <input type="text" value="Employement Type" name="qualification" hidden>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="fullTime" value="1" data-qualified="Full-time">
                <label class="form-check-label" for="fullTime">
                  Full-time
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="partTime" value="2" data-qualified="Part-time">
                <label class="form-check-label" for="partTime">
                  Part-time
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="temporary" value="3" data-qualified="Temporary">
                <label class="form-check-label" for="temporary">
                  Temporary
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="internship" value="4" data-qualified="Internship">
                <label class="form-check-label" for="internship">
                  Internship
                </label>
            </div>
        </div>
    </div>
    
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("input.attainment").click(function () {
            $("#employmentQualified").val($(this).data("qualified"));
            // console.log($(this).data("qualified"));
        });
    });
</script><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/components/forms/employment_type.blade.php ENDPATH**/ ?>