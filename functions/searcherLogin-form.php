<?php

    require '../conf/connection.php';

    $login=0;
    $invalid=0;

    if(isset($_POST["login"])){
        $username=strtoupper($_POST["username"]);
        $passwrd=$_POST["password"];

        $passquery=$conn->query("SELECT password FROM searcher_register WHERE username='$username'");
        $stored_hashed_password=$passquery->fetch_assoc()['password'];

        if(password_verify($passwrd,$stored_hashed_password)){
            $login=1;
            session_start();
            $_SESSION["authenticate"]='true';
            header('location:../searchStudent.php');

        }
        else{
            $invalid=1;
            echo
            "
            <script>
                alert('User ID and password does not match!');
                window.location.href='../searcherLogin.php';
            </script>
            ";
            
        }
    }
?>