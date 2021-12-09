
@extends('admin.index')
@section('main')

<h1 class="display-4">All Newspaper List</h1>
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
   
  
</table>
@endsection()