@extends('admin.index')

@section('admin')
<div class="container">
    <form action="{{ route('position.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="job">Job Title</label>
          <input type="text" class="form-control" id="job" name="job">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection