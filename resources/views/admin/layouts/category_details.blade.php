@extends('admin.index')


@section('main')
    <h1>categories Details</h1>

    <p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/categories/'.$categorie->image)}}" alt="product">
    </p>
 <p>Image: {{$categories->status}}</p>
<p>Category Title: {{$categories->name}}</p>
<p>Discription: <h4><span style="color: orange">BDT {{$categories->price}}</span></h4></p>
<p>Available: {{$categories->description}}</p>
@endsection