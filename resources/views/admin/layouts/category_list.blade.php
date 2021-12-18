
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
      <th scope="col">Id</th>
      <th scope="col">Category Title</th>
      <th scope="col">Discription</th>
      <th scope="col">Available</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
      
    </tr>
  </thead> 
  <tbody>

  

    @foreach($categories as $key=>$category)
   <tr> 
       <td>{{$key+1}}</td>
       
      <td>{{$category->category_title}}</td>
      <td>{{$category->discription}}</td>
      <td>{{$category->available}}</td>
      <td><img src="{{url('/uploads/categories/'.$category->image)}}" style="width:100px;height:50px" alt=""></td>
      
      <td>
       <a button type="button" class="btn btn-success" href="{{route('admin.category.details',$category->id)}}">Details</button>
       <a button type="button" class="btn btn-primary" href="{{route('category.edit',$category->id)}}">Edit</button>
       <a button type="button" class="btn btn-danger" href="{{route('admin.category.delete',$category->id)}}" >Delete</button>
    </td>


    </tr>

    
   @endforeach 
  </tbody>
  
</table>
@endsection()