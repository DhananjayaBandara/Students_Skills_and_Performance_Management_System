<?php

    require '../conf/connection.php';

    $login=0;
    $invalid=0;

    if(isset($_POST["login"])){
        $username=trim(strtoupper($_POST["username"]));
        $passwrd=$_POST["password"];

        $passquery=$conn->query("SELECT password FROM student_register WHERE regNo='$username'");
        $stored_hashed_password=$passquery->fetch_assoc()['password'];
        if(password_verify($passwrd,$stored_hashed_password)){
            $query1="SELECT * FROM studentdata WHERE regNo='$username';";
            $result1=mysqli_query($conn,$query1);
            if(mysqli_num_rows($result1)>0){
                $login=1;
                session_start();
                $_SESSION["ReAuthenticate"]='true';
                $_SESSION['stuRegNum'] = $username;
                header('location:../updateStudentInformation.php?data='.$username);
            }
            else{
                $login=1;
                session_start();
                $_SESSION["authenticate"]='true';
                $_SESSION['stuRegNum'] = $username;
                header('location:../studentInformation.php');
            }
        }
        else{
            $invalid=1;
            echo
            "
            <script>
                alert('User ID and password does not match!');
                window.location.href='../studentLogin.php';
            </script>
            ";
        }
    }
?>