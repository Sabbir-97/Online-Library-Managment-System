

<br>
    <div style="margin-left:470px;">
            <h1>Book Details</h1>
    </div>

    <p>
    <img src="{{asset('/images/book/' .$allBook->image_path)}}" style="margin-left:470px;width:300px;height:200px" alt="">

    </p>



    <div style="margin-left:470px;">
        <p>Book Title: {{$allBook->book_title}}</p>
        <p>Category: {{$allBook->category}}</p>
        <p>Available: {{$allBook->available_books}}</p>
    </div>
