@extends('admin.index')
@section('main')

<h1 class="display-4">All Magazine List</h1>
<br>
<a href="{{route('magazine.form')}}" class="edit-anchor">Add New Magazine</a>

<br>

<form action="{{route('admin.magazine')}}">
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

<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
      <th scope="col">Id</th>
      <th scope="col">Magazine Name</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
      <th scope="col">Description</th>
      <th scope="col">File</th>
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
      <td>{{$magazine->description}}</td>
      <td><a target="_blank" type="button" class="btn btn-success" href="{{ url('/uploads/book/',$magazine->file) }}">View</a></td>
      <td><img src="{{url('/uploads/magazines/'.$magazine->img)}}" style="width:100px;height:50px" alt=""></td>

      <td>
       <a button type="button" class="btn btn-success" href="{{route('admin.magazine.details',$magazine->id)}}" role="button">Details</button>
       <a button type="button" class="btn btn-primary" href="{{route('admin.magazine.edit',$magazine->id)}}" role="button">Edit</button>
       <a button type="button" class="btn btn-danger" href="{{route('admin.magazine.delete',$magazine->id)}}" role="button">Delete</button>
    </td>
    </tr>
   @endforeach
  
   
  
</table>
@endsection()