@extends('admin.index')
@section('main')

<h1>All Waiting User List</h1>
<br>
<br>
<!-- <a href=""class="btn btn-primary">All Waiting User</a> -->
<table class="table table-bordered border-primary">
  <thead>
    <tr>

      <th scope="col">User Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
      <th scope="col">Contact No</th>
      <th scope="col">Email Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Religion</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Transaction Id</th>
      <th scope="col">Approve</th>
    </tr>
  </thead>
  <tbody>

  
  @foreach ( $list as $waitinguser)
   <tr> 

      <td>{{$waitingusers->user_name}}</td>
      <td>{{$waitingusers->first_name}}</td>
      <td>{{$waitinguser->last_name}}</td>
      <td>{{$waitinguser->password}}</td>
      <td>{{$waitinguser->contact_no}}</td>
      <td>{{$waitingusers->email_address}}</td>
      <td>{{$waitingusers->date_of_birth}}</td>
      <td>{{$waitingusers->gender}}</td>
      <td>{{$waitingusers->religion}}</td>
      <td>{{$waitingusers->payment_method}}</td>
      <td>{{$waitingusers->transaction_id}}</td>
      <td>{{$waitinguser->approve}}</td>

       <td> <a button type="button" class="btn btn-success" href="{{route('user.approve')}}"></a>Approve</td>
       <td> <a button type="button" class="btn btn-success" href="{{route('user.delete')}}"></a>Delete</td>
    </tr>
   @endforeach 
   
  </tbody>
</table>

@endsection