@extends('admin.index')
@section('main')

<br>
</br>
<form>
    
<div class="card-content">
        <form Action="{{route('bookForm')}}" method="post" enctype="multipart/form-data">
          @csrf
          
          <div class="field">
            <label class="label">User Id</label>
            <div class="control">
              <input required class="input" name="book_title" type="text" placeholder="Enter your user id">
            </div>
          </div>

          <div class="field">
            <label class="label">Fast Name</label>
            <div class="control">
              <input required class="input" name="category" type="text" placeholder="Enter your first name">
            </div>
          </div>

          <div class="field">
            <label class="label">Last Name</label>
            <div class="control">
              <input required class="input" name="available_books" type="text" placeholder="Enter your last name ">
            </div>
          </div>

          <div class="field">
            <label class="label">Email Adress</label>
            <div class="control">
              <input required class="input" name="available_books" type="text" placeholder="Enter your email adress ">
            </div>
          </div>

          <div class="field">
            <label class="label">Password</label>
            <div class="control">
              <input required class="input" name="available_books" type="text" placeholder="Enter your password ">
            </div>
          </div>

          <div class="field">
            <label class="label">Image :</label>
            <!-- <div class="control"> -->
              <input required class="input" name="image_path" type="file" placeholder="Choose your Image ">
            <!-- </div> -->
          </div>

          <div class="field">
            <label class="label">Gender :</label>
            <!-- <div class="control"> -->
            <input type="radio" name="gender" id="gender" value="male"> Male
					  <input type="radio" name="gender" id="gender" value="female"> Female
					  <input type="radio" name="gender" id="gender" value="others"> Others
            <!-- </div> -->
          </div>

          <div class="field">
            <label class="label">Religion :</label>
            <!-- <div class="control"> -->
            <input type="radio" name="religion" id="religion" value="islam"> Islam
					  <input type="radio" name="religion" id="religion" value="hindu"> Hindu
					  <input type="radio" name="religion" id="religion" value="others"> Others

            <!-- <input type="checkbox" name="c1" id="religion" value="islam"> Islam
					  <input type="checkbox" name="c1" id="religion" value="hindu"> Hindu
					  <input type="checkbox" name="c1" id="religion" value="others"> Others -->
            <!-- </div> -->
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