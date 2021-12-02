@extends('admin.index')
@section('main')

<br>
</br>
<form>
    
<div class="card-content">
        <form Action="{{route('approveuser.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          
          <div class="field">
            <label class="label">User Id</label>
            <div class="control">
              <input required class="input" name="user_id" type="text" placeholder="Enter your user id">
            </div>
          </div>

          <div class="field">
            <label class="label">First Name</label>
            <div class="control">
              <input required class="input" name="first_name" type="text" placeholder="Enter your first name">
            </div>
          </div>

          <div class="field">
            <label class="label">Last Name</label>
            <div class="control">
              <input required class="input" name="last_name" type="text" placeholder="Enter your last name ">
            </div>
          </div>

          <div class="field">
            <label class="label">Email Adress</label>
            <div class="control">
              <input required class="input" name="email_adress" type="text" placeholder="Enter your email adress ">
            </div>
          </div>

          <div class="field">
            <label class="label">Password</label>
            <div class="control">
            <input type="date" name="dob" id="dob">
            </div>
          </div>

          <div class="field">
            <label class="label">Date of Birth</label>
            <div class="control">
              <input required class="input" name="password" type="text" placeholder="Enter your password ">
            </div>
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