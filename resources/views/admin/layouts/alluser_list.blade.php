@extends('admin.index')

@section('main')

<h1>All Approved User List</h1>
<a href="{{route('alluserapproved.form')}}" class="btn btn-primary">Create a New User</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Religion</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>

@endsection