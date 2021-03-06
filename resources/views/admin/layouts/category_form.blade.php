@extends('admin.index')

@section('main')


<div class="card-content">
        <form Action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          


           <div class="field">
            <label class="label">Category Title</label>
            <div class="control">
              <input required class="input" name="category_title" type="text" placeholder="Enter the category title">
            </div>
          </div>


          <div class="field">
            <label class="label">Discription</label>
            <div class="control">
              <input required class="input" name="discription" type="text" placeholder="Enter the discription">
            </div>
            </div>

            <div class="field">
            <label class="label">File</label>
            <div class="control">
              <input required class="input" name="pdf" type="file" placeholder="choose your file ">
            </div>

          </div>

            <div class="field">
            <label class="label">Available</label>
            <div class="control">
              <input required class="input" name="available" type="text" placeholder="Enter the available">
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