<?php
    session_start();
    $loggedStuRegNnum =  $_SESSION['stuRegNum'];

    require '../conf/connection.php';
    require '../message.php';


    if(isset($_POST["submit"])) {
        $initialName=$_POST["initialName"];
        $fullName=$_POST["fullName"];
        $district=$_POST["district"];
        $bio=$_POST["bio"];
        $school=$_POST["school"];
        $birthday=$_POST["birthday"];
        $age=$_POST["age"];
        $gender=$_POST["gender"];
        $mobileNo=$_POST["mobileNo"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $faculty=$_POST["faculty"];
        $department=$_POST["department"];
        $course=$_POST["course"];
        $academicYear=$_POST["academicYear"];
        $level=$_POST["level"];
        $gpa=$_POST["gpa"];
        $credits=$_POST["credits"];
        $class=$_POST["class"];
        $extra=$_POST["extra"];


        if(isset($_POST["progLang"])){
            $progLangs=$_POST["progLang"];
            $proglanguage="";
            foreach($progLangs as $row){
                $proglanguage .= $row . ",";
            }
        }
        else{
            $proglanguage=null;
        }
        

        
        if(isset($_POST["webDesigning"])){
            $webDesigning=$_POST["webDesigning"];
            $webDesign="";
            foreach($webDesigning as $row){
                $webDesign .= $row . ",";
            }
        }
        else{
            $webDesign=null;
        }

        
        if(isset($_POST["framework"])){
            $frameworks=$_POST["framework"];
            $framework="";
            foreach($frameworks as $row){
                $framework .= $row . ",";
            }
        }
        else{
            $framework=null;
        }

       
        if(isset($_POST["database"])){
            $databases=$_POST["database"];
            $database="";
            foreach($databases as $row){
                $database .= $row . ",";
            }
        }
        else{
            $database=null;
        }

        
        if(!empty($_POST["projLink"])){

            $projectLink=isset($_POST['projLink']) ? $_POST['projLink']:array("");
            $projectDesc=isset($_POST["projDesc"]) ? $_POST["projDesc"]:array("");

            $i=0;
            foreach($projectLink as $pl){
                $q="INSERT INTO project_details(regNo,project_link,project_description) VALUES ('$loggedStuRegNnum','$projectLink[$i]','$projectDesc[$i]');";
                mysqli_query($conn,$q);
                $i++;
            }
        }
        else{
            $projectDesc=null;
            $projectLink=null;
        }

        if (!empty($_POST["title"]) || !empty($_POST['company']) || !empty($_POST['duration'])) {

            $title = isset($_POST["title"]) ? $_POST["title"] : array();
            $company = isset($_POST["company"]) ? $_POST["company"] : array();
            $duration = isset($_POST["duration"]) ? $_POST["duration"] : array();
            $description = isset($_POST["description"]) ? $_POST["description"] : array();
            
            $i = 0;
            foreach($title as $t){
                $q = "INSERT INTO work_experience (regNo, title, company_name, duration, description) VALUES ('$loggedStuRegNnum', '$title[$i]', '$company[$i]', '$duration[$i]', '$description[$i]');";
                mysqli_query($conn, $q);
                $i++;
            }
        
        } else {
            $description = null;
            $title = null;
            $company = null;
            $duration = null;
        }
        

        
        $query = "INSERT INTO studentData VALUES
        ('$loggedStuRegNnum','$initialName','$fullName','$bio','$district','$school','$birthday','$age','$gender',
        '$mobileNo','$email','$address','$faculty','$department','$course','$academicYear',
        '$level','$gpa','$credits','$class','$extra','$proglanguage','$webDesign','$framework','$database')"; 

            $result=mysqli_query($conn,$query);
            if($result){
                printMessage("Data Inserted Successfully !","../myProfile.php");  
            }
            else{
                die(mysqli_error($conn));
            }
    
            mysqli_close($conn);
        

    }
           
?>