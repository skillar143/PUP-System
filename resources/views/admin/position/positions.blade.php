@extends('admin.index')

@section('admin')
<div class="d-flex flex-column">
    <h3 class="mb-3">Available Positions</h3>
    <div class="row row-cols-1 row-cols-md-2">
       @forelse ($jobs as $job)
            @foreach ($job->positions as $position)
                <div class="col mb-2">
                    <div class="card" style="width: 18rem;">
                       <div class="card-body">
                         <h5 class="card-title">{{ $position->job }}</h5>
                         <p class="card-text">{{ $position->description }}</p>
                         <a href="{{ route('qualification.create', $position->id) }}" class="card-link">Set Qualifications</a>
                       </div>
                    </div>
                </div>
            @endforeach
       @empty
           
       @endforelse
    </div>
 </div>
@endsection