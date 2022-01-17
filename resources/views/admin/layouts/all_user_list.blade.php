@extends('admin.index')
@section('main')

<h1 class="display-4">All User List</h1>

<br>
<a href="{{route('all.user.form')}}"></a>
<br>
<br>

<form action="{{route('admin.alluser')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
       <th scope="col">Id</th>
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
      <th scope="col">Image</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

  

    @foreach($allUsers as $key=>$allUser)
   <tr> 
       <td>{{$key+1}}</td>
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
      <td> <img src="{{asset('/uploads/users/' .$allUser->image)}}" style="width:100px;height:50px" alt=""></td>
      <td>{{$allUser->role}}</td>

      <td>
       <a button type="button" class="btn btn-success" href="{{route('admin.alluser.details',$allUser->id)}}">Details</button>
       <!-- <a button type="button" class="btn btn-primary" href="#">Edit</button> -->
       <a button type="button" class="btn btn-danger" href="{{route('admin.alluser.delete',$allUser->id)}}">Delete</button>
    </td>
    </tr>
   @endforeach 
  </tbody>

 
</table>

@endsection()

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>