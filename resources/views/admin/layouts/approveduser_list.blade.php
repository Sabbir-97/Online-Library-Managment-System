@extends('admin.index')

@section('main')

<h1>All Approved User List</h1>
<a href="" class="btn btn-primary">Create a New User</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Password</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Religion</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Transaction Id</th>
      
    </tr>
  </thead>
   

</table>

@endsection