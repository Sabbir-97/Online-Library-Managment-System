@extends('admin.index')


@section('main')
    <h1>Newspaper Details</h1>

    <p>
    <img src="{{url('/uploads/newspapers/' .$newspapers->img_news)}}" style="width:300px;height:200px" alt="">
    </p>
<p>Newspaper Name: {{$newspapers->newspaper_name}}</p>
<p>Category: {{$newspapers->category}}</p>
<p>Available: {{$newspapers->available_newspaper}}</p>
@endsection