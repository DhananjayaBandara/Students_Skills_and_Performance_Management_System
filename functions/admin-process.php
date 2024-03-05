<?php
    require_once '../conf/connection.php';

    if(isset($_GET["data1"])){
        $regNo=$_GET["data1"];
        $q1="DELETE FROM `student_register` WHERE regNo='$regNo';";
        $res1=mysqli_query($conn,$q1);
        $q2="DELETE FROM studentdata WHERE regNo='$regNo';";
        $res2=mysqli_query($conn,$q2);
        $q3="DELETE FROM project_details WHERE regNo='$regNo';";
        $res3=mysqli_query($conn,$q3);
        $q4="DELETE FROM work_experience WHERE regNo='$regNo';";
        $res4=mysqli_query($conn,$q4);
        if($res1 && $res2 && $res3 && $res4){
            echo
            "
            <script>
                alert('$regNo records Deleted Successfully!');
                window.location.href='../admin.php';
            </script>
            ";
        }
    }
    

        
    if(isset($_GET["data2"])){
        $username=$_GET["data2"];
        $q3="DELETE FROM `searcher_register` WHERE username='$username';";
        $res3=mysqli_query($conn,$q3);
        if($res3){
            echo
            "
            <script>
                alert('$username User records Deleted Successfully!');
                window.location.href='../admin.php';
            </script>
            ";
        }
    }
    
    if(isset($_GET["data3"])){
        $queryNo=$_GET["data3"];
        $q4="DELETE FROM `user_queries` WHERE `no`='$queryNo';";
        $res4=mysqli_query($conn,$q4);
        if($res4){
            echo
            "
            <script>
                alert('User Query Deleted Successfully!');
                window.location.href='../admin.php';
            </script>
            ";
        }
    }
    


?>
