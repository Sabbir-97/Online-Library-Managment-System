@extends('admin.index')

@section('main')


<div class="card-content">
        <form Action="{{route('all.user.store')}}" method="post">
          @csrf
          <div class="field">
            <label class="label">User Name</label>
            <div class="control">
              <input required class="input" name="user_name" type="text" placeholder="Enter the user name">
            </div>
          </div>


           <div class="field">
            <label class="label">First Name</label>
            <div class="control">
              <input required class="input" name="first_name" type="text" placeholder="Enter the first name">
            </div>
          </div>


          <div class="field">
            <label class="label">Last Name</label>
            <div class="control">
              <input required class="input" name="last_name" type="text" placeholder="Enter the last name">
            </div>
            </div>

            <div class="field">
            <label class="label">Password</label>
            <div class="control">
              <input required class="input" name="password" type="text" placeholder="Enter the password">
            </div>
          </div>



          <div class="field">
            <label class="label">Contact No</label>
            <div class="control">
              <input required class="input" name="contact_no" type="text" placeholder="Enter the contact no ">
            </div>
          </div>


          <div class="field">
            <label class="label">Email Address</label>
            <div class="control">
              <input required class="input" name="email_address" type="text" placeholder="Enter the email address ">
            </div>
          </div>


          <div class="field">
            <label class="label">Date of Birth</label>
            <div class="control">
            <input required type="date" name="dob" id="dob">
            </div>
          </div>


          <div class="field">
            <label class="label">Gender : </label>
            
                    <input required type="radio" name="gender" id="gender" value="male"> Male
					<input required type="radio" name="gender" id="gender" value="female"> Female
					<input required type="radio" name="gender" id="gender" value="others"> Others
            
          </div>


          <div class="field">
            <label class="label">Religion : </label>
        
                    <input required type="radio" name="religion" id="religion" value="islam"> Islam
					<input required type="radio" name="religion" id="religion" value="hindu"> Hindu
					<input required type="radio" name="religion" id="religion" value="others"> Others
            
          </div>


          
            <div class="field">
            <label class="label">Payment Method</label>
            <div class="control">
            <select name="Payment Method">
					<option value="bkash">Bkash</option>
					<option value="nogod">Nogod</option>
					<option value="rocket">Rocket</option>
					<option value="ucash">Ucash</option>
					<option value="upay">Upay</option>
					<option value="sure cash">Sure Cash</option>
					</select>
            </div>
          </div>

          <div class="field">
            <label class="label">Transaction Id</label>
            <div class="control">
              <input required class="input" name="transaction_id" type="text" placeholder="Enter the transaction id">
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