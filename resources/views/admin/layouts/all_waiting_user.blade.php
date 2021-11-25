@extends('admin.index')
@section('main')
<h1>All Waiting User List</h1>
<a href="{{route('waiting.form')}}"class="btn btn-primary">All Waiting User</a>
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

    <!-- @foreach($waitingUsers as $waitingUser)
   <tr> 
      <td>{{$waitingUser->first_name}}</td>
      <td>{{$waitingUser->last_name}}</td>
      <td>{{$waitingUser->email}}</td>
      <td>{{$waitingUser->contact_number}}</td>
      <td>{{$waitingUser->approve}}</td>
    </tr>
   @endforeach  -->
  </tbody>
</table>

@endsection()