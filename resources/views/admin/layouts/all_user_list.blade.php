@extends('admin.index')
@section('main')

<h1 class="display-4">All User List</h1>

<br>
<a href="{{route('all.user.form')}}" class="edit-anchor">Create New Users</a>
<br>
<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
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
      <th scope="col">Role</th>
    </tr>
  </thead>

  <tbody>

  

    @foreach($allUsers as $allUser)
   <tr> 
       <td>{{$allUser->user_name}}</td>
      <td>{{$allUser->first_name}}</td>
      <td>{{$allUser->last_name}}</td>
      <td>{{$allUser->password}}</td>
      <td>{{$allUser->contact_no}}</td>
      <td>{{$allUser->email_address}}</td>
      <td>{{$allUser->date_of_birth}}</td>
      <td>{{$allUser->gender}}</td>
      <td>{{$allUser->religion}}</td>
      <td>{{$allUser->payment_method}}</td>
      <td>{{$allUser->transaction_id}}</td>
      <td>{{$allUser->role}}</td>
    </tr>
   @endforeach 
  </tbody>

 
</table>

@endsection()