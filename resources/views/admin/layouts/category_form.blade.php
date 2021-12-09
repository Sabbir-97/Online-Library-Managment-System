@extends('admin.index')

@section('main')


<div class="card-content">
        <form Action="{{route('category.store')}}" method="post">
          @csrf
          <div class="field">
            <label class="label">Category Id</label>
            <div class="control">
              <input required class="input" name="category_id" type="text" placeholder="Enter the category id">
            </div>
          </div>


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
            <label class="label">Available</label>
            <div class="control">
              <input required class="input" name="available" type="text" placeholder="Enter the available">
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