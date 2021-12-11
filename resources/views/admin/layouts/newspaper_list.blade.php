@extends('admin.index')
@section('main')

<h1 class="display-4">All Newspaper List</h1>
<br>

<a href="{{route('newspaper.form')}}" class="edit-anchor">Add New Newspaper</a>
<br>

<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
     
      <th scope="col">Newspaper Name</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  @foreach($newspapers as $newspaper)
   <tr> 
      <td>{{$newspaper->newspaper_name}}</td>
    <td>{{$newspaper->category}}</td>
      <td>{{$newspaper->available_newspaper}}</td>
      <td> <img src="{{url('/uploads/newspapers/' .$newspaper->img_news)}}" style="width:100px;height:50px" alt=""></td>
    </tr>
   @endforeach 
   
  
</table>
@endsection()