@extends('admin.index')

@section('main')


<div class="card-content">
        <form Action="{{route('bookForm')}}" method="post" enctype="multipart/form-data">
          @csrf
          

           <div class="field">
            <label class="label">Book Title</label>
            <div class="control">
              <input required class="input" name="book_title" type="text" placeholder="Enter the book title">
            </div>
          </div>
          <div class="field">
            <label class="label">Category</label>
            <div class="control">
              <input required class="input" name="category" type="text" placeholder="Enter the category">
            </div>
          </div>
          <div class="field">
            <label class="label">Available Books</label>
            <div class="control">
              <input required class="input" name="available_books" type="text" placeholder="Enter the available books ">
            </div>
          </div>
          <div class="field">
            <label class="label">Image</label>
            <div class="control">
              <input required class="input" name="image_path" type="file" placeholder="Choose your Image ">
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