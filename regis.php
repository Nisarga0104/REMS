<?php
session_start();

?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title></title>
			<link rel="stylesheet" type="text/css" href="css/style1.css">
			<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		</head>
		<body style="background-color:#ffc299">

			<?php

			include 'dbcon.php';

			if(isset($_POST['submit'])){
				$username = mysqli_real_escape_string($con, $_POST['username']) ;
				$email = mysqli_real_escape_string($con, $_POST['email']) ;
				$mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
				$password = mysqli_real_escape_string($con, $_POST['password']) ;
				$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

				$emailquery = "select * from regis where email='$email' ";
				$query= mysqli_query($con,$emailquery);

				$emailcount = mysqli_num_rows($query);

				if($emailcount>0){
								?>
					<script>
						alert("Email already exists");
					</script>
					<?php
				}else{
					if ($password===$cpassword) {
						$insertquery = "insert into regis(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$password','$cpassword')";

						$iquery = mysqli_query($con, $insertquery);

						if($iquery){
				?>
						<script>
						alert("Registered Successful");
				</script>
					<?php
					}else{
				?>
				<script>
					alert(" Error ");
				</script>
				<?php
			}
			
					}else{
						?>
				<script>
					alert(" Password not Matching");
				</script>
				<?php
					}
				}


			}




			?>



		
			<center><h1 class="pt-5">MORYA REAL ESTATE</h1></center>

		<div class="container shadow-lg border rounded-lg px-5 my-5" style="background-color:white;">
		    <div class="row py-5 mt-4 align-items-center">
		        <!-- For Demo Purpose -->
		        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
		            <img src="css/giphy.gif" alt="" class="img-fluid mb-3 d-none d-md-block">
		            <h1>Create an Account</h1>
		            <p class="font-italic text-muted mb-0">You are one step away from exploring your new HOME!</p>
		        </div>
		        
		        <div class="col-md-7 col-lg-6 ml-auto">
		            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		                <div class="row">

		                    <div class="input-group col-lg-12 mb-4">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text bg-white px-4 border-right-0">
		                                <i class="fa fa-user text-muted"></i>
		                            </span>
		                        </div>
		                        <input id="Username" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0" required>
		                    </div>

		                    <div class="input-group col-lg-12 mb-4">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text bg-white px-4 border-right-0">
		                                <i class="fa fa-envelope text-muted"></i>
		                            </span>
		                        </div>
		                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0" required>
		                    </div>

		                    <div class="input-group col-lg-12 mb-4">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text bg-white px-4 border-right-0">
		                                <i class="fa fa-phone-square text-muted"></i>
		                            </span>
		                        </div>
		                        <input id="phone" type="tel" name="mobile" placeholder="Phone Number" class="form-control bg-white border-left-0" required>
		                    </div>

		                    <div class="input-group col-lg-12 mb-4">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text bg-white px-4 border-right-0">
		                                <i class="fa fa-lock text-muted"></i>
		                            </span>
		                        </div>
		                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0" required>
		                    </div>
		                    
		                    <div class="input-group col-lg-12 mb-4">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text bg-white px-4 border-right-0">
		                                <i class="fa fa-lock text-muted"></i>
		                            </span>
		                        </div>
		                        <input id="passwordConfirmation" type="password" name="cpassword" placeholder="Confirm Password" class="form-control bg-white border-left-0" required>
		                    </div>

		                    <div class="form-group col-lg-12 mx-0">
		                        <button type="submit" name="submit" class="btn btn-outline-danger btn-block">Create Account</button>
		                    </div>

		                    <!-- Already Registered -->
		                    <div class="text-center w-100">
		                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text-primary ml-2">Login</a></p>
		                    </div>

		                </div>
		            </form>
		        </div>
		    </div>
		</div>







		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		</body>
		</html>