@extends('admin.index')
@section('main')

<h1>All Waiting User List</h1>
<br>
<br>
<!-- <a href=""class="btn btn-primary">All Waiting User</a> -->
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email Adress</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Religion</th>
      <th scope="col">Approve</th>
    </tr>
  </thead>
  <tbody>

  <!-- sent data into object variable from array variable -->
  @foreach ( $list as $waitinguser)
   <tr> 
      <td>{{$waitingusers->first_name}}</td>
      <td>{{$waitinguser->last_name}}</td>
      <td>{{$waitinguser->email}}</td>
      <td>{{$waitinguser->contact_number}}</td>
      <td>{{$waitinguser->approve}}</td>
    </tr>
   @endforeach 
   
  </tbody>
</table>

@endsection