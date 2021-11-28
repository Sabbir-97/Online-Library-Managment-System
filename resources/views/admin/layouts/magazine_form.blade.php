
@extends('admin.index')

@section('main')


        <div class="card-content">
         <form Action="{{route('magazine.store')}}" method="post">
         @csrf
        
          <div class="field">
            <label class="label">Magazine Id</label>
            <div class="control">
              <input required class="input" name="magazine_id" type="text" placeholder="Enter the newspaper code">
            </div>
          </div>

           <div class="field">
            <label class="label">Magazine Name</label>
            <div class="control">
              <input required class="input" name="magazine_name" type="text" placeholder="Enter the newspaper title">
            </div>
          </div>
          <div class="field">
            <label class="label">Category</label>
            <div class="control">
              <input required class="input" name="category" type="text" placeholder="Enter the category">
            </div>
          </div>
          <div class="field">
            <label class="label">Available Magazine</label>
            <div class="control">
              <input required class="input" name="available_magazine" type="text" placeholder="Enter the available newspapers ">
            </div>
          </div>
          <div class="field">
            <label class="label">Image</label>
            <div class="control">
              <input required class="input" name="image" type="file" placeholder="Choose your Image ">
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