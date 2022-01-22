
@extends('admin.index')

@section('main')


        <div class="card-content">
         <form Action="{{route('magazine.store')}}" method="post" enctype="multipart/form-data">
         @csrf
        
          

           <div class="field">
            <label class="label">Magazine Name</label>
            <div class="control">
              <input required class="input" name="magazine_name" type="text" placeholder="Enter the magazine name">
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
              <input required class="input" name="available_magazine" type="text" placeholder="Enter the available magazine ">
            </div>

          </div>

          <div class="field">
            <label class="label">File</label>
            <div class="control">
              <input required class="input" name="pdf" type="file" placeholder="choose your file ">
            </div>

          </div>

          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <input required class="input" name="description" type="text" placeholder="Enter the description ">
            </div>

          </div>

          <div class="field">
            <label class="label">Image</label>
            <div class="control">
              <input required class="input" name="img" type="file" placeholder="Choose your Image ">
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