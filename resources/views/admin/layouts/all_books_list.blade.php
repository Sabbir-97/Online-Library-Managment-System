@extends('admin.index')
@section('main')

<h1 class="display-4">All Book List</h1>

<br>
<a href="{{route('addAllBook')}}" class="edit-anchor">Add New Books</a>
<br>
<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
    <th scope="col">#</th>
      <th scope="col">Book Title</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
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
      <td> <img src="{{asset('/images/book/' .$allBook->image_path)}}" style="width:100px;height:50px" alt=""></td>
      
      
      <td>
          <a class="btn-btn-primary" href=""role="button">Details</a>
          <a class="btn-btn-primary" href=""role="button">Edit</a>
          <a class="btn-btn-primary" href=""role="button">Delete</a>

      <!-- <button type="button" class="btn btn-primary">Primary</button> -->
    </td>
    </tr>
   @endforeach 
  </tbody>
</table>

@endsection()