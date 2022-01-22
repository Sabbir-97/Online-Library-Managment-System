@extends('admin.index')
@section('main')

<h1 class="display-4">All Book List</h1>

<br>
<a href="{{route('addAllBook')}}" class="edit-anchor">Add New Books</a>
<br>
<br>

<form action="{{route('allBook')}}">
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
      <th scope="col">Book Title</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
      <th scope="col">Description</th>
      <th scope="col">File</th>
      <th scope="col">Image</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  

    @foreach($allBooks as $key=>$allBook)
   <tr> 
   <td>{{$key+1}}</td>
      <td>{{$allBook->book_title}}</td>
     <td>{{$allBook->category}}</td>
      <td>{{$allBook->available_books}}</td>
      <td>{{$allBook->description}}</td>
      <td><a target="_blank" type="button" class="btn btn-success" href="{{ url('/uploads/book/',$allBook->file) }}">View</a></td>
      
      <td> <img src="{{asset('/images/book/' .$allBook->image_path)}}" style="width:100px;height:50px" alt=""></td>
      
      
      <td>
       <a button type="button" class="btn btn-success" href="{{route('admin.book.details',$allBook->id)}}">Details</button>
       <a button type="button" class="btn btn-primary" href="{{route('admin.book.edit',$allBook->id)}}">Edit</button>
       <a button type="button" class="btn btn-danger" href="{{route('admin.book.delete',$allBook->id)}}">Delete</button>
    </td>
    </tr>
   @endforeach 
   
  </tbody>
  
</table>


@endsection()
