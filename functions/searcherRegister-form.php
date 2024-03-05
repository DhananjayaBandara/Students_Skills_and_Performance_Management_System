<?php

    require '../conf/connection.php';
    require '../message.php';

    $success=0;
    $user=0;
    $invalid=0;
    $term=0;

    if(isset($_POST["register"])){
        if(isset($_POST["terms"])){
            $username=strtoupper($_POST["username"]);
            $firstName=$_POST["firstName"];
            $lastName=$_POST["lastName"];
            $email=$_POST["email"];
            $passwrd=$_POST["password"];
            $cpasswrd=$_POST["cpassword"];

            $query = "SELECT * FROM searcher_register WHERE username='$username'";
            $result = mysqli_query($conn, $query);  
            if($result){
                $num=mysqli_num_rows($result);
                if($num>0){
                    $user=1;
                }
                else{
                    if($passwrd===$cpasswrd){
                        $searcher_hashed_password=password_hash($passwrd,PASSWORD_DEFAULT);
                        $query = "INSERT INTO searcher_register VALUES
                        ('$username','$firstName','$lastName','$email','$searcher_hashed_password')";
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
            $term=1;
        } 
    }

    if($term){
        echo
			"
			<script>
	            alert('Please agree to the terms and Conditions !');
	            window.location.href='../searcherLogin.php';
	        </script>
			";
    }

    if($user){
        echo
        "
        <script>
            alert('User already exists!!');
            window.location.href='../searcherLogin.php';
        </script>
        ";
    }

    if($success){
        printMessage("You registered Successfully!! Please login to Continue.","../searcherLogin.php");
    }

    if($invalid){
        echo
        "
        <script>
            alert('Password did not match!!');
            window.location.href='../searcherLogin.php';
        </script>
        ";
    }

?>