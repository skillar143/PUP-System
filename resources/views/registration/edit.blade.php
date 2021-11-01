@extends('welcome')

@section('content')
    <div class="container-fluid w-50 d-flex justify-content-center align-items-center">
      <form class="w-50" action="{{ route('registration.update', $data->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <select class="form-control" id="gender" name="gender" value="{{ $data->gender }}">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ $data->dob }}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
        </div>
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ $data->mobile_number }}">
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $data->nationality }}">
        </div>
        
        <div class="from-row">
            <a onclick="document.getElementById('deleteFrm').submit()" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
      </form>
      <form action="{{ route('registration.destroy', $data->id) }}" method="POST" id="deleteFrm">
        @method('DELETE')
        @csrf
        {{-- <button onclick="document.getElementById('deleteFrm').submit()" class="btn btn-sm btn-secondary">Back</button> --}}
      </form>
    </div>
@endsection