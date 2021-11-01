<form class="w-100" action="{{ route('qualification.store', $position_id ) }}" method="POST">
    @csrf
    <input type="text" value="" name="qualified" id="yearsQualified" hidden>
    <div class="card mb-3 w-100">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Year's of Experience</h4>
            <input type="text" value="Year's of Experience" name="qualification" hidden>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input years" type="radio" name="points" id="noExperience" value="1" data-qualified="No Experience">
                <label class="form-check-label" for="noExperience">
                    No Experience
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input years" type="radio" name="points" id="1year" value="2" data-qualified="1-2 year(s)">
                <label class="form-check-label" for="1year">
                  1-2 year(s)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input years" type="radio" name="points" id="3years" value="3" data-qualified="3-5 years">
                <label class="form-check-label" for="3years">
                  3-5 years
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input years" type="radio" name="points" id="6years" value="4" data-qualified="6-9 years">
                <label class="form-check-label" for="6years">
                  6-9 years
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input years" type="radio" name="points" id="10years" value="5" data-qualified="10 more years">
                <label class="form-check-label" for="10years">
                  10 more years
                </label>
            </div>
        </div>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("input.years").click(function () {
            $("#yearsQualified").val($(this).data("qualified"));
            // console.log($(this).data("qualified"));
        });
    });
</script>