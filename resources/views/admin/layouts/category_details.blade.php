@extends('admin.index')


@section('main')
    <h1>Categories Details</h1>

    <p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/categories/'.$categories->image)}}" alt="product">
    </p>
<p>Category Title: {{$categories->category_title}}</p>
<p>Discription: {{$categories->discription}}</p>
<p>Available: {{$categories->available}}</p>
@endsection