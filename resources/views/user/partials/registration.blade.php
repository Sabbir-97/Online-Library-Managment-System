<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{url('website/assets/css/login.css')}}">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="{{route('user.do.registration')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="name" type="text" class="form-control" placeholder="Enter Your User Name">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="first_name" type="text" class="form-control" placeholder="Enter Your First Name">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="last_name" type="text" class="form-control" placeholder="Enter Your Last Name">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="Enter Your Password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="contact" type="text" class="form-control" placeholder="Enter Your Contact No">
						
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="email_address" type="email" class="form-control" placeholder="Enter Your Email">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<!-- <input name="date" type="dob" id="dob" class="form-control" placeholder="date of birth"> -->
						<!-- <label for="dob">Date of Birth :</label> -->
					<input type="date" name="date_of_birth" id="dob" class="form-control" placeholder="Enter Your Date of birth">

					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="file" name="image" id="image" class="form-control" placeholder="Choose your Image">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<div class="form-control">
						<input type="radio" name="gender" id="gender" value="male"> Male
					<input type="radio" name="gender" id="gender" value="female"> Female
					<input type="radio" name="gender" id="gender" value="others"> Others
					</div>
					</div>

					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<div class="form-control">
						<input type="radio" name="religion" id="religion" value="islam"> Islam
					    <input type="radio" name="religion" id="religion" value="hindu"> Hindu
					    <input type="radio" name="religion" id="religion" value="others"> Others
					</div>
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<!-- <input name="phone" type="number" class="form-control" placeholder="Enter Your Payment Method"> -->
						<div class="form-control">
						
						<select name="Payment Method">
								<option value="bkash"> Bkash  01760641197</option>
								<option value="nogod"> Nogod  01760641197</option>
								<option value="rocket"> Rocket  01760641197</option>
								<option value="sure cash"> Sure Cash  01760641197</option>
								<option value="upay"> Upay  01760641197</option>
								<option value="ucash"> Ucash  01760641197</option>
					</select>
					</div>
						
					</div>



					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="transaction" type="text" class="form-control" placeholder="Enter Your Transaction Id">
						
					</div>

					
					


					
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					 Have an account?<a href="{{route('user.login')}}">Login</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>