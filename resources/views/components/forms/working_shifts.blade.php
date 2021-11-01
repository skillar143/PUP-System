<form class="w-100" action="{{ route('qualification.store', $position_id ) }}" method="POST">
    @csrf
    <input type="text" value="" name="qualified" id="shiftsQualified" hidden>
    <div class="card mb-3 w-100">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Prefer Working Shifts</h4>
            <input type="text" value="Prefer Working Shifts" name="qualification" hidden>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="day" value="1" data-qualified="Day">
                <label class="form-check-label" for="day">
                  Day
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="night" value="2" data-qualified="Night">
                <label class="form-check-label" for="night">
                  Night
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="swing" value="3" data-qualified="Swing">
                <label class="form-check-label" for="swing">
                  Swing
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="rotation" value="4" data-qualified="Rotation">
                <label class="form-check-label" for="rotation">
                  Rotation
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="split" value="5" data-qualified="Split">
                <label class="form-check-label" for="split">
                  Split
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input attainment" type="radio" name="points" id="graveyard" value="6" data-qualified="Graveyard">
                <label class="form-check-label" for="graveyard">
                  Graveyard
                </label>
            </div>
        </div>
    </div>
    
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("input.attainment").click(function () {
            $("#shiftsQualified").val($(this).data("qualified"));
            // console.log($(this).data("qualified"));
        });
    });
</script>