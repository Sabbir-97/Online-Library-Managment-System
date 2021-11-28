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
      <th scope="col">Magazine Id</th>
      <th scope="col">Magazine Name</th>
      
      <th scope="col">Category</th>
      <th scope="col">Available</th>
    </tr>
  </thead>
  @foreach($magaZines as $magaZine)
   <tr> 
       <td>{{$magaZine->magazine_id}}</td>
      <td>{{$magaZine->magazine_name}}</td>
      <td>{{$magaZine->category}}</td>
      <td>{{$magaZine->available_magazine}}</td>
    </tr>
   @endforeach
  
   
  
</table>
@endsection()