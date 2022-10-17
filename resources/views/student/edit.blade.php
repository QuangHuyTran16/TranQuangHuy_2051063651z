@extends('layout.app')

@section('title', 'Edit')

@section('content')
  <h1>Edit</h1>
  <form method="post" action="/students/{{ $students->id }}/edit">
    <div class="mb-3">
      <label for="txtFulname" class="form-label">Title</label>
      <input type="text" class="form-control" id="txtFulname" name="txtFulname" value="{{ $students->fullname }}">
    </div>
    <div class="mb-3">
      <label for="txtBirthday" class="form-label">Description</label>
      <input type="date" class="form-control" id="txtBirthday" name="txtBirthday" value="{{ $students->birthday }}">
    </div>
    <div class="mb-3">
      <label for="txtAdress" class="form-label">Short Content</label>
      <input type="text" class="form-control" id="txtAdress" name="txtAdress" value="{{ $students->address }}">
    </div>
   
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection  