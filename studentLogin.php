<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SSAPMS | Student Login</title>
	<link rel="stylesheet" href="styles/login style.css">

	<style>
		
	</style>

</head>
<body>
	<?php
		include 'header.html';
	?>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			
			<form id="login" class="input-group" action="functions/studentLogin-form.php" method="post">
				<h2><u>Student Login</u></h2>
				<input type="text" class="input-field" name="username" placeholder="Registration Number" required>
				<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box" name="rememberMe" value="yes"><span>Remember Password</span>
				<button type="submit" class="submit-btn" name="login" onclick="location.href=''">Log in</button>
			</form>
			<form id="register" class="input-group" action="functions/studentRegister-form.php" method="post">
				<h2><u>Student Register</u></h2>
				<input type="text" name="regNo" class="input-field" placeholder="Registration Number" required>
				<input type="email" name="email" class="input-field" placeholder="E-mail Id" required>
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
				<input type="password" name="cpassword" class="input-field" placeholder="Confirm Password" required>
				<input type="checkbox" class="check-box" name="terms"><span><a href="termsAndCondition.html" target=_blank>I agree to the terms and conditions</a></span>
				<button type="submit" class="submit-btn" value="submit" name="register" onclick="location.href=''">Register</button>
			</form>
		</div>
	</div>
	<script>
		var x=document.getElementById("login");
		var y=document.getElementById("register");
		var z=document.getElementById("btn");

		function register(){
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}

		function login(){
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0px";
		}
	</script>

	<?php
		include 'footer.html';
	?>
	


</body>
</html>