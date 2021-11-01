@extends('admin.index')

@section('css')
    {{-- <link href="{{ asset('css/range.css') }}" rel="stylesheet"> --}}
@endsection

@section('admin')
<div class="d-flex flex-column">
    <div class="row">
        <div class="jumbotron jumbotron-fluid w-100">
            <div class="container w-100">
                <h3 class="mb-3">Set Qualification for</h3>
                <h3 class="display-4">{{ $position->job }}</h3>
                <p class="lead">{{ $position->description }}</p>
            </div>
        </div>
    </div>
    <div class="row p-2">

        @component('components.forms.educational_attainment')
            @slot('position_id')
                {{ $position->id }}
            @endslot
        @endcomponent

        @component('components.forms.years_of_experience')
            @slot('position_id')
                {{ $position->id }}
            @endslot
        @endcomponent

        @component('components.forms.employment_type')
            @slot('position_id')
                {{ $position->id }}
            @endslot
        @endcomponent

        @component('components.forms.working_shifts')
            @slot('position_id')
                {{ $position->id }}
            @endslot
        @endcomponent


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

    </script>

@endsection