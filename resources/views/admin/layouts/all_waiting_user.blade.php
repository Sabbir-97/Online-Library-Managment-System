@extends('admin.index')
@section('main')


<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Approve</th>
    </tr>
  </thead>
  <tbody>

  <!-- sent data into object variable from array variable -->

    @foreach($waitingUsers as $waitingUser)
   <tr> 
      <td>{{$waitingUser->first_name}}</td>
      <td>{{$waitingUser->last_name}}</td>
      <td>{{$waitingUser->email}}</td>
      <td>{{$waitingUser->contact_number}}</td>
      <td>{{$waitingUser->approve}}</td>
    </tr>
   @endforeach 
  </tbody>
</table>

@endsection()