<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SSAPMS | Searcher Login</title>
	<link rel="stylesheet" href="styles/login style.css">
	
</head>
<body>
	
	<?php
		include 'header.html';
	?>
	<div class="hero">
		<div class="form-box" style="height:650px;">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form id="login" class="input-group" action="functions/searcherLogin-form.php" method="post">
				<h2><u>Searcher Login</u></h2>
				<input type="text" class="input-field" name="username" placeholder="Username" required>
				<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box" name="rememberMe"><span>Remember Password</span>
				<button type="submit" class="submit-btn" name="login">Log in</button>
			</form>
			<form id="register" class="input-group" action="functions/searcherRegister-form.php" method="post">
				<h2><u>Searcher Register</u></h2>
				<input type="text" name="username" class="input-field" placeholder="Username" required>
				<input type="text" name="firstName" class="input-field" placeholder="First Name" required>
                <input type="text" name="lastName" class="input-field" placeholder="Last Name" required>
				<input type="email" name="email" class="input-field" placeholder="E-mail Id" required>
				<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
				<input type="password" name="cpassword" class="input-field" placeholder="Confirm Password" required>
				<input type="checkbox" class="check-box" name="terms"><span><a href="termsAndCondition.html" target=_blank>I agree to the terms and conditions</a></span>
				<button type="submit" class="submit-btn" value="submit" name="register" >Register</button>
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
