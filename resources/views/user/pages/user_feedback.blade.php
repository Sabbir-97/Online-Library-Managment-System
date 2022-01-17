
@extends('user.index')
@section('content')

<br>
<br>
<br>
<br>
<br>

<div class="card-content">
         <form Action="{{route('website.user.feedback')}}" method="post" enctype="multipart/form-data">
         @csrf

         <div class="field">
            <label class="label">User Name</label>
            <div class="control">
              <input required class="input" name="user_name" type="text" placeholder="Enter the User Name">
            </div>
          </div>


          <br>
          <br>
          
      

          
          
          <div class="field">
            <label class="label">User Email</label>
            <div class="control">
              <input required class="input" name="user_email" type="email" placeholder="Enter the User Email">
            </div>
          </div>

          <br>
          <br>

          <div class="field">
            <label class="label">User Phone No</label>
            <div class="control">
              <input required class="input" name="user_phone_no" type="text" placeholder="Enter the User Phone No">
            </div>
          </div>

          <br>
          <br>

          <div class="field">
            <label class="label">User Feedback</label>
            <div class="control">
              <textarea required class="input" name="user_feedback" type="text" placeholder="Enter the User Feedback"></textarea>
            </div>
          </div>

          <br>
          

          
          

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="submit-button">
                Submit
              </button>
            </div>
          </div>
          </form>
        </div>

        <br>


        @endsection
