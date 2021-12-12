
@extends('admin.index')
@section('main')

<h1 class="display-4">All Category List</h1>
<br>

<a href="{{route('category.form')}}" class="edit-anchor">Add New Category</a>
<br>

<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
      <th scope="col">Category Id</th>
      <th scope="col">Category Title</th>
      <th scope="col">Discription</th>
      <th scope="col">Available</th>
      <th scope="col">Image</th>
      
      
    </tr>
  </thead> 
  <tbody>

  

    @foreach($categories as $category)
   <tr> 
       <td>{{$category->category_id}}</td>
      <td>{{$category->category_title}}</td>
      <td>{{$category->discription}}</td>
      <td>{{$category->available}}</td>
      <td><img src="{{url('/uploads/categories/'.$category->image)}}" style="width:100px;height:50px" alt=""></td>
    </tr>
   @endforeach 
  </tbody>
  
</table>
@endsection()