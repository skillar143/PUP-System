@extends('welcome')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 85vh">
    <a href="{{ route('registration.create', $nextId) }}" class="btn btn-sm btn-primary mb-3">Register</a>
</div>
@endsection