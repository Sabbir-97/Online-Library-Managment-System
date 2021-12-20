@extends('admin.index')


@section('main')
    <h1>Categories Details</h1>

    <p>
    <img src="{{url('/uploads/categories/'.$categories->image)}}" style="width:300px;height:200px" alt="">
    </p>
<p>Category Title: {{$categories->category_title}}</p>
<p>Discription: {{$categories->discription}}</p>
<p>Available: {{$categories->available}}</p>
@endsection