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
      <th scope="col">Newspaper Id</th>
      <th scope="col">Newspaper Name</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
    </tr>
  </thead>
  @foreach($newsPapers as $newsPaper)
   <tr> 
       <td>{{$newsPaper->newspaper_id}}</td>
      <td>{{$newsPaper->newspaper_name}}</td>
      <td> <img src="{{asset('/images/newspapers/' .$newsPaper->image_path)}}" style="width:100px;height:50px" alt=""></td>
      <td>{{$newsPaper->category}}</td>
      <td>{{$newsPaper->available_newspaper}}</td>
    </tr>
   @endforeach 
   
  
</table>
@endsection()