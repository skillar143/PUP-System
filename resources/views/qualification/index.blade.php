@extends('welcome')

@section('content')
<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
  <div class="d-flex flex-column w-50">
    <div class="row d-flex justify-content-between w-100">
      <h1 class="mb-3">Available Positions</h1>
      <a href="{{ route('registration.edit', request()->id) }}" class="btn btn-secondary mt-3 align-self-baseline">Back</a>
    </div>
    <div class="rows row-cols-1 row-cols-md-3 d-flex" >
        @foreach ($positions as $position)
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{ $position->job }}</h5>
                <p class="card-text">{{ $position->description }}</p>
                <a href="{{ route('guestQualification.create', $position->id) }}" class="card-link">Apply Now</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
  </div>
</div>

@endsection