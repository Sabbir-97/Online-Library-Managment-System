@extends('admin.index')

@section('main')


<div class="card-content">
        <form Action="{{route('bookForm')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="field">
            <label class="label">Book Title</label>
            <div class="control">
              <input class="input" name="book_title" type="text" placeholder="Enter the Book Title">
            </div>
          </div>
          <div class="field">
            <label class="label">Category</label>
            <div class="control">
              <input class="input" name="category" type="text" placeholder="Enter the category">
            </div>
          </div>
          <div class="field">
            <label class="label">Available Books</label>
            <div class="control">
              <input class="input" name="available_books" type="text" placeholder="Enter the available books ">
            </div>
          </div>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="submit-button">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
@endsection