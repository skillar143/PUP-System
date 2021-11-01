@extends('welcome')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center w-50">
    <form action="{{ route('guestQualification.store', $position->id) }}" method="post" class="w-75">
        @csrf
        <div class="card mb-3 w-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Educational Attainment</h4>
                <input type="text" value="Educational Attainment" name="qualification[]" hidden>
            </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input attainment" type="checkbox" name="points[]" id="highSchool" value="1" data-qualified="High School Graduate">
                        <label class="form-check-label" for="highSchool">
                          High School Graduate
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input attainment" type="checkbox" name="points[]" id="college" value="2" data-qualified="College Level">
                        <label class="form-check-label" for="college">
                          College Level
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input attainment" type="checkbox" name="points[]" id="associate" value="3" data-qualified="Associate's Degree">
                        <label class="form-check-label" for="associate">
                          Associate's Degree
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input attainment" type="checkbox" name="points[]" id="bachelors" value="4" data-qualified="Bachelor's Degree">
                        <label class="form-check-label" for="bachelors">
                          Bachelor's Degree
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input attainment" type="checkbox" name="points[]" id="masters" value="5" data-qualified="Master's Degree">
                        <label class="form-check-label" for="masters">
                          Master's Degree
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input attainment" type="checkbox" name="points[]" id="doctorate" value="6" data-qualified="Doctorate Degree">
                        <label class="form-check-label" for="doctorate">
                          Doctorate Degree
                        </label>
                    </div>
                </div>
        </div>
        <div class="card mb-3 w-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Year's of Experience</h4>
                <input type="text" value="Year's of Experience" name="qualification[]" hidden>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input years" type="checkbox" name="points[]" id="noExperience" value="1" data-qualified="No Experience">
                    <label class="form-check-label" for="noExperience">
                        No Experience
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input years" type="checkbox" name="points[]" id="1year" value="2" data-qualified="1-2 year(s)">
                    <label class="form-check-label" for="1year">
                      1-2 year(s)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input years" type="checkbox" name="points[]" id="3years" value="3" data-qualified="3-5 years">
                    <label class="form-check-label" for="3years">
                      3-5 years
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input years" type="checkbox" name="points[]" id="6years" value="4" data-qualified="6-9 years">
                    <label class="form-check-label" for="6years">
                      6-9 years
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input years" type="checkbox" name="points[]" id="10years" value="5" data-qualified="10 more years">
                    <label class="form-check-label" for="10years">
                      10 more years
                    </label>
                </div>
            </div>
        </div>
    
        <div class="card mb-3 w-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Employement Type</h4>
                <input type="text" value="Employement Type" name="qualification[]" hidden>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="fullTime" value="1" data-qualified="Full-time">
                    <label class="form-check-label" for="fullTime">
                      Full-time
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="partTime" value="2" data-qualified="Part-time">
                    <label class="form-check-label" for="partTime">
                      Part-time
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="temporary" value="3" data-qualified="Temporary">
                    <label class="form-check-label" for="temporary">
                      Temporary
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="internship" value="4" data-qualified="Internship">
                    <label class="form-check-label" for="internship">
                      Internship
                    </label>
                </div>
            </div>
        </div>
    
        <div class="card mb-3 w-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Prefer Working Shifts</h4>
                <input type="text" value="Prefer Working Shifts" name="qualification[]" hidden>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="day" value="1" data-qualified="Day">
                    <label class="form-check-label" for="day">
                      Day
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="night" value="2" data-qualified="Night">
                    <label class="form-check-label" for="night">
                      Night
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="swing" value="3" data-qualified="Swing">
                    <label class="form-check-label" for="swing">
                      Swing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="rotation" value="4" data-qualified="Rotation">
                    <label class="form-check-label" for="rotation">
                      Rotation
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="split" value="5" data-qualified="Split">
                    <label class="form-check-label" for="split">
                      Split
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input attainment" type="checkbox" name="points[]" id="graveyard" value="6" data-qualified="Graveyard">
                    <label class="form-check-label" for="graveyard">
                      Graveyard
                    </label>
                </div>
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection