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
      <th scope="col">Image</th>
      <th scope="col">Religion</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  @foreach($approveUsers as $approveUser)
   <tr> 
       <td>{{$approveUsers->user_id}}</td>
      <td>{{$approveUsers->fast_name}}</td>
      <td>{{$approveUsers->last_name}}</td>
      <td>{{$approveUsers->email_adress}}</td>
      <td>{{$approveUsers->password}}</td>
      <td>{{$approveUsers->gender}}</td>
      <td>{{$approveUsers->religion}}</td>
    </tr>
   @endforeach
</table>

@endsection