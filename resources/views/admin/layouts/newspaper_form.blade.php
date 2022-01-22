@extends('admin.index')

@section('main')


        <div class="card-content">
         <form Action="{{route('newspaper.store')}}" method="post" enctype="multipart/form-data">
         @csrf
        
         

           <div class="field">
            <label class="label">Newspaper Name</label>
            <div class="control">
              <input required class="input" name="newspaper_name" type="text" placeholder="Enter the newspaper title">
            </div>
          </div>

          
          
          <div class="field">
            <label class="label">Category</label>
            <div class="control">
              <input required class="input" name="category" type="text" placeholder="Enter the category">
            </div>
          </div>
          <div class="field">
            <label class="label">Available Newspaper</label>
            <div class="control">
              <input required class="input" name="available_newspaper" type="text" placeholder="Enter the available newspapers ">
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
              <textarea cols="30" rows="10" class="input" name="description" type="text" placeholder="Enter the description "></textarea>
            </div>
          </div>
          

          <div class="field">
            <label class="label">Image</label>
            <div class="control">
              <input required class="input" name="img_news" type="file" placeholder="Choose your Image ">
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