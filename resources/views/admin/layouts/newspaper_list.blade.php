@extends('admin.index')
@section('main')

<h1 class="display-4">All Newspaper List</h1>
<br>

<a href="{{route('newspaper.form')}}" class="edit-anchor">Add New Newspaper</a>
<br>

<br>

<form action="{{route('admin.newspaper')}}">
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

<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
      <th scope="col">Id</th>
      <th scope="col">Newspaper Name</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
      <th scope="col">Description</th>
      <th scope="col">File</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($newspapers as $key=>$newspaper)
   <tr> 
   <td>{{$key+1}}</td>
      <td>{{$newspaper->newspaper_name}}</td>
    <td>{{$newspaper->category}}</td>
      <td>{{$newspaper->available_newspaper}}</td>
      <td>{{$newspaper->description}}</td>
      <td><a target="_blank" type="button" class="btn btn-success" href="{{ url('/uploads/book/',$newspaper->file) }}">View</a></td>
      <td> <img src="{{url('/uploads/newspapers/' .$newspaper->img_news)}}" style="width:100px;height:50px" alt=""></td>

      <td>
       <a button type="button" class="btn btn-success" href="{{route('admin.newspaper.details',$newspaper->id)}}">Details</button>
       <a button type="button" class="btn btn-primary" href="{{route('admin.newspaper.edit',$newspaper->id)}}">Edit</button>
       <a button type="button" class="btn btn-danger" href="{{route('admin.newspaper.delete',$newspaper->id)}}">Delete</button>
    </td>
    </tr>
   @endforeach 
   
  
</table>
@endsection()