@extends('admin.index')

@section('main')
<h1>Edit Newspaper</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

        <div class="card-content">
         <form Action="{{route('admin.newspaper.update',$newspaper->id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
        
         

           <div class="field">
            <label class="label">Newspaper Name</label>
            <div class="control">
              <input required class="input" name="newspaper_name" value="{{$newspaper['newspaper_name']}}" type="text" placeholder="Enter the newspaper title">
            </div>
          </div>

          
          
          <div class="field">
            <label class="label">Category</label>
            <div class="control">
              <input required class="input" name="category" value="{{$newspaper['category']}}" type="text" placeholder="Enter the category">
            </div>
          </div>
          <div class="field">
            <label class="label">Available Newspaper</label>
            <div class="control">
              <input required class="input" name="available_newspaper" value="{{$newspaper['available_newspaper']}}" type="text" placeholder="Enter the available newspapers ">
            </div>
          </div>

          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <input required class="input" name="description" value="{{$newspaper['description']}}" type="text" placeholder="Enter the description ">
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
                Update
              </button>
            </div>
          </div>
          </form>
        </div>
@endsection