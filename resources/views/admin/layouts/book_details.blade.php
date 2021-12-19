@extends('admin.index')


@section('main')
    <h1>Book Details</h1>

    <p>
    <img src="{{asset('/images/book/' .$allBook->image_path)}}" style="width:100px;height:50px" alt="">

    </p>
<p>Book Title: {{$allBook->book_title}}</p>
<p>Category: {{$allBook->category}}</p>
<p>Available: {{$allBook->available}}</p>
@endsection