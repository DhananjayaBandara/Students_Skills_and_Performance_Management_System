<?php
    require '../conf/connection.php';

    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobileNo=$_POST['mobileNo'];
        $queries=$_POST['query'];

        $query="INSERT INTO `user_queries`(`name`, `email`, `mobileNo`, `query`) VALUES ('$name','$email','$mobileNo','$queries')";
        $result=mysqli_query($conn,$query);

        if($result){
            header('location:../index.php');        
        }
        else{
            die(mysqli_error($conn));
        }

        mysqli_close($conn);
    }

?>