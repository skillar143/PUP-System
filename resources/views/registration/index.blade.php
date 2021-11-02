@extends('welcome')

@section('content')

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 85vh;  background-image: url('{{asset('img/image1.png')}}'); background-repeat: no-repeat; background-size: cover">
    <div class="col">
        </div>
    <div class="col">
        </div>
    <div class="col">
        <h1 class="text-dark">Become a part of our Company</h1>
        <h5 class="text-dark">Staying at home can be an opportunity to get your dream job in Tech, with the No. 1 Company in the Philippines.</h5>
        <a href="{{ route('registration.create', $nextId) }}" class="btn btn-sm btn-danger m-3">Apply Now!</a>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 85vh;  ">
    
<div class="card m-3" style="width: 18rem;">
      <img src="{{asset('img/job-opp1.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Job 1</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>

    <div class="card m-3" style="width: 18rem;">
      <img src="{{asset('img/job-opp1.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Job 2</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>

    <div class="card m-3" style="width: 18rem;">
      <img src="{{asset('img/job-opp1.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Job 3</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">More Info</a>
      </div>
    </div>

</div>




@endsection