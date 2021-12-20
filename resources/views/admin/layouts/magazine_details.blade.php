@extends('admin.index')


@section('main')
    <h1>Magazine Details</h1>

    <p>
    <img src="{{url('/uploads/magazines/'.$magazine->img)}}" style="width:300px;height:200px" alt="">
    </p>
<p>Magazine Name: {{$magazine->magazine_name}}</p>
<p>Category: {{$magazine->category}}</p>
<p>Available: {{$magazine->available_magazine}}</p>
@endsection