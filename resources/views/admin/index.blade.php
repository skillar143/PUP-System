@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Position') }}
                    <a href="{{ Route::currentRouteName() == 'qualification.create' ? route('position.index') : route('position.create') }}" class="btn btn-sm btn-primary">{{ Route::currentRouteName() == 'qualification.create' ? 'Back' : 'Add'}}</a>
                </div>

                <div class="card-body">
                    @yield('admin')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection