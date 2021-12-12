@extends('admin.index')
@section('main')

<h1 class="display-4">All Magazine List</h1>
<br>
<a href="{{route('magazine.form')}}" class="edit-anchor">Add New Magazine</a>

<br>

<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
      <th scope="col">Id</th>
      <th scope="col">Magazine Name</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($magazines as $key=>$magazine)
   <tr> 
      <td>{{$key+1}}</td>
      <td>{{$magazine->magazine_name}}</td>
      <td>{{$magazine->category}}</td>
      <td>{{$magazine->available_magazine}}</td>
      <td><img src="{{url('/uploads/magazines/'.$magazine->img)}}" style="width:100px;height:50px" alt=""></td>

      <td>
       <a button type="button" class="btn btn-success" href="#" role="button">Details</button>
       <a button type="button" class="btn btn-primary" href="#" role="button">Edit</button>
       <a button type="button" class="btn btn-danger" href="#" role="button">Delete</button>
    </td>
    </tr>
   @endforeach
  
   
  
</table>
@endsection()