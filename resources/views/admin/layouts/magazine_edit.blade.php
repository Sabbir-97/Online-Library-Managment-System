
@extends('admin.index')

@section('main')
<h1>Edit Magazine</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif


        <div class="card-content">
         <form Action="{{route('admin.magazine.update',$magazine->id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
        
          

           <div class="field">
            <label class="label">Magazine Name</label>
            <div class="control">
              <input required class="input" name="magazine_name" value="{{$magazine['magazine_name']}}" type="text" placeholder="Enter the magazine name">
            </div>
          </div>
          <div class="field">
            <label class="label">Category</label>
            <div class="control">
              <input required class="input" name="category" value="{{$magazine['category']}}" type="text" placeholder="Enter the category">
            </div>
          </div>

          <div class="field">
            <label class="label">Available Magazine</label>
            <div class="control">
              <input required class="input" name="available_magazine" value="{{$magazine['available_magazine']}}" type="text" placeholder="Enter the available magazine ">
            </div>
          </div>

          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <input required class="input" name="description" value="{{$magazine['description']}}" type="text" placeholder="Enter the description ">
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
                Update
              </button>
            </div>
          </div>
          </form>
        </div>
@endsection