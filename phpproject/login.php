<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>
		Login
	</title>
</head>
<body>
<header>
	<?php
 include('navigation.php');
?>
</header>
<div>
	<div class="container mt-5">				
		<div class="col-lg-6 offset-2 mb-5 login-form-design m-auto" >
			<div class="section_title mb-5">
				<h2 class="ml-4">Login Here</h2>	
			</div>

		<div class="mb-5">	
			<form action="login-request.php" method="POST">
	
					<div class="container mt-5">
							
								<div class="col-md-12">
										<div class="form-group">
											<label>
												Username
											</label>
											<input class="form-control" type="text" name="username" required="">
										</div>
										<div class="form-group">
										<label>
											Password
										</label>
										<input class="form-control" type="password" name="password" required="">
									</div>
									<div class="form-group">
								<input type="submit" name="login" value="Login" class="btn  btn-block custom-button btn-lg ">
						</div>
						<div class="text-right">
									<p>Don't Have an Account? <strong><a href="signup.php">SignUp</a></strong></p>
						</div>			
								</div>

								
					
						
					
						
							
			</div>								
			</form>										
		</div>
</div>

</div>






















  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>





