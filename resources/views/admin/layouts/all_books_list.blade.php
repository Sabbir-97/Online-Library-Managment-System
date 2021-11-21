@extends('admin.index')
@section('main')

<br>
<a href="{{route('addAllBook')}}" class="edit-anchor">Add New Books</a>
<br>
<br>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Book Title</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
    </tr>
  </thead>
  <tbody>

  <!-- sent data into object variable from array variable -->

    @foreach($allBooks as $allBook)
   <tr> 
      <td>{{$allBook->book_title}}</td>
      <td>{{$allBook->category}}</td>
      <td>{{$allBook->available_books}}</td>
    </tr>
   @endforeach 
  </tbody>
</table>

@endsection()