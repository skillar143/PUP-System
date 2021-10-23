@extends('welcome')

@section('content')
<a href="{{ route('registration.create', $nextId) }}" class="btn btn-sm btn-primary">Create</a>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">E-mail</th>
        <th scope="col">Mobile_number</th>
        <th scope="col">Nationality</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($registrations as $registration)
        <tr>
          <td>{{ $registration->name }}</td>
          <td>{{ $registration->gender }}</td>
          <td>{{ $registration->dob }}</td>
          <td>{{ $registration->email }}</td>
          <td>{{ $registration->mobile_number }}</td>
          <td>{{ $registration->nationality }}</td>
          <td class="d-flex">
            <a href="{{ route('registration.edit', $registration->id) }}" class="btn btn-sm btn-primary mr-2">Edit</a>
            <form action="{{ route('registration.destroy', $registration->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
            <td colspan="6" class="text-center">No Data</td>
        </tr>
      @endforelse
    </tbody>
</table>
@endsection