@extends('admin.index')
@section('main')

<button type="button" class="btn btn-success">Add New Books</button>

<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Book Title</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>World War</td>
      <td>War</td>
      <td>Yes</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Passenger</td>
      <td>Adventure</td>
      <td>Yes</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>OS</td>
      <td>Learning</td>
      <td>No</td>
    </tr>
    
  </tbody>
</table>

<button type="button" class="btn btn-primary">Go Back</button>

@endsection()