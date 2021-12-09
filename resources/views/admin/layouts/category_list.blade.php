
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
      
      
    </tr>
  </thead> 
  <tbody>

  

    @foreach($cateGories as $cateGory)
   <tr> 
       <td>{{$cateGory->category_id}}</td>
      <td>{{$cateGory->category_title}}</td>
      <td>{{$cateGory->discription}}</td>
      <td>{{$cateGory->available}}</td>
    </tr>
   @endforeach 
  </tbody>
   
  
</table>
@endsection()