<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Register Process</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">

</head>
<body>
	<?php

	    require '../conf/connection.php';
		require '../message.php';

	    $success=0;
	    $user=0;
	    $invalid=0;
		$terms=0;

	    if(isset($_POST["register"])){
			if(isset($_POST["terms"])){
				$regNo=trim(strtoupper($_POST["regNo"]));
				$email=$_POST["email"];
				$passwrd=$_POST["password"];
				$cpasswrd=$_POST["cpassword"];

				$query = "SELECT * FROM student_register WHERE regNo='$regNo'";
				$result = mysqli_query($conn, $query);  
				if($result){
					$num=mysqli_num_rows($result);
					if($num>0){
						$user=1;
					}
					else{
						if($passwrd===$cpasswrd){
							$hashed_password=password_hash($passwrd,PASSWORD_DEFAULT);
							$query = "INSERT INTO student_register VALUES
							('$regNo','$email','$hashed_password')";
							$result=mysqli_query($conn,$query);
							if($result){
								$success=1;
							}
						}
						else{
							$invalid=1;
						}
					}
				}
			}
			else{
				$terms=1;
				echo
			"
			<script>
	            alert('Please agree to the terms and Conditions !');
	            window.location.href='../studentLogin.php';
	        </script>
			";

			}
		
	    }

		if($user){
			echo
			"
			<script>
	            alert('User already exists!!');
	            window.location.href='../studentLogin.php';
	        </script>
			";
		}

		if($success){
			printMessage("You registered Successfully!! Please login to Continue.","../studentLogin.php");
		}

		if($invalid){
			echo
			"
			<script>
	            alert('Password did not match!!');
	            window.location.href='../studentLogin.php';
	        </script>
			";
		}
	?>
</body>
</html>

