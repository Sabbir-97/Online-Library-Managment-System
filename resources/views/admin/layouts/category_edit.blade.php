@extends('admin.index')

@section('main')


<div class="card-content">
        <form Action="#" method="" enctype="multipart/form-data">
          @csrf
          


           <div class="field">
            <label class="label">Category Title</label>
            <div class="control">
              <input required class="input" name="category_title" value="{{$category['category_title']}}" type="text" placeholder="Enter the category title">
            </div>
          </div>


          <div class="field">
            <label class="label">Discription</label>
            <div class="control">
              <input required class="input" name="discription" value="{{$category['discription']}}" type="text" placeholder="Enter the discription">
            </div>
            </div>

            <div class="field">
            <label class="label">Available</label>
            <div class="control">
              <input required class="input" name="available" value="{{$category['available']}}" type="text" placeholder="Enter the available">
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