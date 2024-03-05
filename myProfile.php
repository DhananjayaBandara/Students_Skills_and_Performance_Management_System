

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        .main{
            height: 1000px;
            margin:30px 20px 20px 20px;
            border:3px solid crimson;
            border-radius: 10px;
            background-color:rgb(46, 43, 59) ;
        }
        .left_col{
            height: 1000px;
            margin:0 70% 0 0 ;
            border: 2px solid crimson;
            
        }
        .pic img{
            height: 200px;
            width: 220px;
            margin: 5%;
            border: 2px solid crimson;
            border-radius: 50%;
        }

        .projectTable{
            min-width: 100%;
            border: 0px;
            padding: 10px;
        }

        .projectTableTr{
            padding: 30px;
            margin: 20px;
        }

        .profileButton{
            width: 250px;
            height: 50px;
            border: 1px solid black;
            border-radius: 15px;
            background-color: white;
            margin: 30px;
            font-size: 25px;
        }
        .profileButton:hover{
            background-color: black;
            color: white;
        }

        .buttonCont{
            text-align: center;
            align-content:safe;
            width: 100%;
        }
    </style>
 
</head>
<body class="bg-light">
    <?php
        include("header.html");
    ?>

    <?php

        require_once 'conf/connection.php';
        session_start();
        $loggedStuRegNnum =  $_SESSION['stuRegNum'];

        $sql1="SELECT * FROM studentdata WHERE regNo='$loggedStuRegNnum'";
        $result=mysqli_query($conn,$sql1);
        if($result){
            $row=mysqli_fetch_assoc($result);

            $regNo = $row['regNo'];
            $initialName = $row['initialName'];
            $fullName=$row["fullName"];
            $bio=$row["bio"];
            $district=$row["district"];
            $school=$row["school"];
            $birthday=$row["birthday"];
            $age=$row["age"];
            $gender=$row["gender"];
            $mobileNo=$row["mobileNo"];
            $email=$row["email"];
            $address=$row["address"];
            $faculty=$row["faculty"];
            $department=$row["department"];
            $course=$row["course"];
            $academicYear=$row["academicYear"];
            $level=$row["level"];
            $gpa=$row["gpa"];
            $credits=$row["credits"];
            $class=$row["class"];
            $extra=$row["extra"];
            $progammingLanguages=$row["progLanguage"];
            $webDesigningTools=$row["webDesign"];
            $frameworks=$row["framework"];
            $databases=$row["database"];
           

        }
    
    ?>
    <br><br><br>
    <div class="container p-5 bodycont">
        <div class="row">
            <div class="col-lg-4 bg-dark text-white text-center py-4">
                <div class="header-left">
                   
                    <img src="assests/profile avatar.jpg" alt="" class="img-thumbnail rounded-circle mb-2">
                    <h1 class="display-5" id="name"><?php echo $initialName ?></h1>
                    <h3 class="display-6" id="name"><?php echo $loggedStuRegNnum ?></h3>
                    <h4 class="lead text-uppercase text-white-50 mb-4"><?php echo $level ?>&nbsp Student</h4>
                </div>
                <div>
                    <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Contact</h5>
                    <ul class="list-unstyled text-white-50 ml-5 py-2 text-center">
                        <li class="list-item" style="text-align: left;">
                            <i class="fas fa-mobile-alt mx-4"></i>
                            <?php echo $mobileNo ?>
                        </li>
                        <li class="list-item" style="text-align: left;">
                            <i class="fas fa-envelope-open-text mx-4"></i>
                            <?php echo $email ?>
                        </li>
                        <li class="list-item" style="text-align: left;">
                            <i class="fas fa-blog mx-4"></i>
                            www.sample.com
                        </li>
                        <li class="list-item" style="text-align: left;">
                            <i class="fas fa-map-marker-alt mx-4"></i>
                            <?php echo $address ?>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Skills</h5>
                    <ul class="list text-white-50 ml-5 py-2 text-left text-capitalize">
                        
                        <?php

                            $progammingLanguages=explode(',',$progammingLanguages);
                            if($progammingLanguages!=null){
                                foreach($progammingLanguages as $row){
                                    echo"<li class='list-item'>$row </li>";
                                }
                            }
                            else{
                                echo"<li class='list-item'>I am Willing to study Programming Languages</li>";
                            }

                            $webDesigningTools=explode(',',$webDesigningTools);
                            if ($webDesigningTools != null){
                                foreach($webDesigningTools as $row){
                                    echo"<li class='list-item'>$row </li>";
                                }
                            }
                            else{
                                echo"<li class='list-item'>I am Willing to study Web development Tools</li>";
                            }

                            $frameworks=explode(',',$frameworks);
                            if ($frameworks != null){
                                foreach($frameworks as $row){
                                    echo"<li class='list-item'>$row </li>";
                                }
                            }
                            else{
                                echo"<li class='list-item'>I am Willing to study Computer Frameworks</li>";
                            }

                            $databases=explode(',',$databases);
                            if ($databases != null){
                                foreach($databases as $row){
                                    echo"<li class='list-item'>$row </li>";
                                }
                            }
                            else{
                                echo"<li class='list-item'>I am Willing to study Database Management Softwares</li>";
                            }  
                        ?>  
                    </ul>
                </div>
                <div>
                    <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Education</h5>
                    <ul class="list text-white-50 ml-5 py-2 text-left text-capitalize">
                        <li class="list-item" style="text-align: left;">School: <?php echo $school ?> </li>
                        <li class="list-item" style="text-align: left;">Course: <?php echo $course ?></li>
                        <li class="list-item" style="text-align: left;">Extra :<?php echo $extra ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 bg-light text-dark py-5 px-5">
                <div class="header-right">
                    <h4 class="text-uppercase">Profile</h4>
                    <hr>
                    <p>
                        <?php
                            if(!empty($bio)){
                                echo $bio;
                            }
                            else{
                                echo 
                                "Motivated college student with a Bachelor of Science from University of vavuniya, Sri Lanka 
                                seeking an internship opportunity with Synthex Inc., to use my information and communication skills to 
                                help create effective social campaigns. Experienced in project planning, time management, 
                                and problem-solving, with notable achievements in research projects and the workplace.";
                            }
                        ?>
                    </p>
                </div>
                <div>
                    <h4 class="text-uppercase">Work Experience</h4>
                    <hr>
                    <ul class="ex-list">
                        <?php
                            $q="SELECT title,company_name,duration,description FROM work_experience WHERE regNo='$loggedStuRegNnum'";
                            $result=mysqli_query($conn,$q);
                            while($row=mysqli_fetch_row($result)){
                                echo
                                "
                                <li><h3>$row[0]</h3></li>
                                <strong>$row[1]</strong> | $row[2]<br>
                                $row[3]
                                ";
                            }
                        ?>
                    </ul>
                    
                    <h4 class="text-uppercase">My Projects</h4>
                    <?php
                        echo 
                        "
                        <table border=1 class=projectTable>
                            <tr class=projectTableTr>
                                <th>Project Link</th>
                                <th>Project Description</th>
                            </tr>
                        ";
                        $q="SELECT project_link,project_description FROM project_details WHERE regNo='$loggedStuRegNnum'";
                        $result=mysqli_query($conn,$q);
                        while($row=mysqli_fetch_row($result)){
                            echo
                            "
                            <tr class=projectTableTr>
                                <td><a href='$row[0]' target=_blank>$row[0]</a></td>
                                <td>$row[1]</td>
                            </tr>
                            ";
                        }
                        echo "</table>";
                    ?>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="buttonCont">
<button class="profileButton" onclick="location.href='updateStudentInformation.php?data=<?php echo $loggedStuRegNnum; ?>'">Edit</button><button class="profileButton" onclick="location.href='index.php'">Done</button>
    </div>
    <?php
        include("footer.html");
    ?>
</body>
</html>