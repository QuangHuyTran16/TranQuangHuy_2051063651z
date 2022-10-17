@extends('layout.app')

@section('title', 'Add')

@section('content')
  <h1>ADD</h1>
  <form method="post" action="/students/add">
    <div class="mb-3">
      <label for="txtFulname" class="form-label">Full name</label>
      <input type="text" class="form-control" id="txtFulname" name="txtFulname" />
    </div>
    <div class="mb-3">
      <label for="txtBirthday" class="form-label">Birthday</label>
      <input type="date" class="form-control" id="txtBirthday" name="txtBirthday" />
    </div>
    <div class="mb-3">
      <label for="txtAdress" class="form-label">Address</label>
      <input type="text" class="form-control" id="txtAdress" name="txtAdress" />
    </div>
   
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection  