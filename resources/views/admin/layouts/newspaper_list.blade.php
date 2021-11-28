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
      <th scope="col">Newspaper Code</th>
      <th scope="col">Newspaper Name</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
    </tr>
  </thead>
  @foreach($newsPapers as $newsPaper)
   <tr> 
       <td>{{$newsPaper->newspaper_code}}</td>
      <td>{{$newsPaper->newspaper_name}}</td>
      <td><img src="{{url('/uploads',.$newspaper->image)}}" alt="newspaper image" width="100px"></td>
      <td>{{$newsPaper->category}}</td>
      <td>{{$newsPaper->available_newspaper}}</td>
    </tr>
   @endforeach 
   
  
</table>
@endsection()