@extends('admin.index')
@section('main')

<table class="table">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User Phone No</th>
      <th scope="col">User Feedback</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($feedback as $key=>$data)
    <tr>
      <td>{{$key+1}}</td>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_email}}</td>
      <td>{{$data->user_phone_no}}</td>
      <td>{{$data->user_feedback}}</td>

      <td>
       <a button type="button" class="btn btn-success" href="#">Details</button>
       <a button type="button" class="btn btn-danger" href="#" >Delete</button>
    </td>

    </tr>
    @endforeach  
    
  </tbody>

 
   
   

</table>

@endsection()