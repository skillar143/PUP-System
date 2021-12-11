<form class="w-100" action="<?php echo e(route('qualification.store', $position_id )); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" value="" name="qualified" id="educationQualified" hidden>
    <div class="card mb-3 w-100">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Educational Attainment</h4>
            <input type="text" value="Educational Attainment" name="qualification" hidden>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="highSchool" value="1" data-qualified="High School Graduate">
                <label class="form-check-label" for="highSchool">
                  High School Graduate
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="college" value="2" data-qualified="College Level">
                <label class="form-check-label" for="college">
                  College Level
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="associate" value="3" data-qualified="Associate's Degree">
                <label class="form-check-label" for="associate">
                  Associate's Degree
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="bachelors" value="4" data-qualified="Bachelor's Degree">
                <label class="form-check-label" for="bachelors">
                  Bachelor's Degree
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="masters" value="5" data-qualified="Master's Degree">
                <label class="form-check-label" for="masters">
                  Master's Degree
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="doctorate" value="6" data-qualified="Doctorate Degree">
                <label class="form-check-label" for="doctorate">
                  Doctorate Degree
                </label>
            </div>
        </div>
    </div>
    
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("input.attainment").click(function () {
            $("#educationQualified").val($(this).data("qualified"));
            // console.log($(this).data("qualified"));
        });
    });
</script><?php /**PATH C:\xampp\htdocs\projects\job_application\resources\views/components/forms/educational_attainment.blade.php ENDPATH**/ ?>