<form class="w-100" action="{{ route('qualification.store', $position_id ) }}" method="POST">
    @csrf
    <input type="text" value="" name="qualified" id="educationQualified" hidden>
    <div class="card mb-3 w-100">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Educational Attainment</h4>
            <input type="text" value="Educational Attainment" name="qualification" hidden>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        <div class="card-body">
            
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
</script>