@extends('welcome')

@section('content')
    <h1>Qualifications</h1>
    <a href="{{ route('registration.edit', request()->id) }}" class="btn btn-sm btn-secondary">Back</a>
@endsection