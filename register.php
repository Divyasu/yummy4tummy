<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
	</head>

<body>

	<!-- Button to open the modal -->

	<!-- The Modal (contains the Sign Up form) -->
	<?php  include("index.php") ?>
  
  		<form class="modal-content" action="validate.php" method="post">
    			<div class="container">
      				<h1>Sign Up</h1>
      				<p>Please fill in this form to create an account.</p>
      				<hr>
      				<label for="uname"><b>User Name</b></label>
      				<input type="text" placeholder="Enter your User Name" name="uname" required>
      				<label for="email"><b>Email</b></label>
      				<input type="email" placeholder="Enter your Email" name="email" required>
				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
				<label for="psw-repeat"><b>Repeat Password</b></label>
      				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				
				<div class="clearfix">
        				<button type="button" onclick="home()" class="cancelbtn">Cancel</button>
        				<button type="submit" class="signup" name="signup">Sign Up</button>
      				</div>
    			</div>
  		</form>

	<script>
		function home(){
			window.location.href="home.php";
	}
	</script>
</body>
</html>