
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Information</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .submitBtn{
            width: 100%; 
            font-size: 25px; 
            border: 2px solid white; 
            background-color: black; 
            font-weight: bold;
        }
        .submitBtn:hover{
            background-color: white;
            color: black;
            border: 2px solid red;
        }
        label{
            font-weight: bold;
        }
        h1{
            text-transform: uppercase;
        }
        input,select,textarea{
            border: 1px solid #0096bfab;
        }
        .skills{
            display: flex;
            flex-direction: row;
            margin: 20px;
        }
        .item-right{
            margin-left: 50%;
        }
    </style>

</head>

<body>
    
    <?php
        require_once 'conf/connection.php';
        include("header.html");
    ?>
    <?php

        $data=$_GET['data'];
        $sql1="SELECT * FROM studentdata WHERE regNo='$data'";
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

    <form action="functions/updateProcess-form.php" method="post" autocomplete="off" enctype="multipart/form-data" name="stuData">

        <h1>Personal Info</h1>
        
        <label for="regNo">Registration Number:</label>
        <?php echo "<input type='text' id='regNo' name='regNo' value=' $regNo' disabled>" ?>

        <table>
            <tr>
                <td>
                    <label for ="initialName">Name with Initials:</label>
                    <?php echo "<input type='text' id='initialName' name='initialName' value='$initialName'>" ?>
                </td>
                <td>
                    <label for="fullName">Full Name:</label>
                    <?php echo "<input type='text' id='fullName' name='fullName' value='$fullName'>" ?>
                </td>
            </tr>
        </table>
    
        <label for="bio">Bio:</label>
        <?php echo "<textarea id='bio' name='bio' placeholder='Please Enter your details to display on your profile Bio:
Example:
    Motivated college student with a Bachelor of Science from University of vavuniya, Sri Lanka 
    seeking an internship opportunity with Synthex Inc., to use my information and communication skills to 
    help create effective social campaigns. Experienced in project planning, time management, 
    and problem-solving, with notable achievements in research projects and the workplace. ' value='$bio'>$bio</textarea>" ?>


        <label for="district">District:</label>
        <?php 
        echo "<select id='district' name='district' value='$district'>";

        $districts = ['Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Colombo', 'Galle', 'Gampaha', 'Hambantota', 'Jaffna', 'Kalutara', 'Kandy', 'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara', 'Monaragala', 'Mullaitivu', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Vavuniya'];

        foreach($districts as $d){
            if($d == $district){
                echo "<option value=$d selected>$d</option>";
            }
            else{
                echo "<option value=$d>$d</option>";
            }
        }


        
        ?>

        </select>

        <label for="school">School Attended:</label>
        <?php echo "<input type='text' id='school' name='school' value='$school'>" ?>

        <table>
            <tr>
                <td>
                    <label for="birthday">Birthday:</label>
                    <?php echo "<input type='date' id='birthday' name='birthday' value='$birthday'>" ?>
                </td>
                <td>
                    <label for="age">Age:</label>
                    <?php echo "<input type='number' id='age' name='age' value='$age'>" ?>
                </td>
            </tr>
        </table>
        
        <fieldset>
            <label for="gender">Gender:</label><br>
            <?php
                if($gender=="Male"){
                    echo "<input type=radio name=gender value=Male id=gender checked>Male";
                    echo "<input type=radio name=gender value=Female id=gender>Female";
                }
                else{
                    echo "<input type=radio name=gender value=Male id=gender>Male";
                    echo "<input type=radio name=gender value=Female id=gender checked>Female<br>";
                }
            ?>
            
            
        </fieldset>

        <h1>Contact Info</h1>
    
        <table>
            <tr>
                <td>
                    <label for="mobileNo">Mobile Number:</label>
                    <?php echo "<input type='telephone' id='mobileNo' name='mobileNo' value='$mobileNo'>" ?>
                </td>
                <td>
                    <label for="email">E-mail:</label>
                    <?php echo "<input type='email' id='email' name='email' value='$email' required>" ?>
                </td>
            </tr>
        </table>
    
        <label for="address">Address:</label>
        <?php echo "<textarea id='address' name='address'>$address</textarea>" ?>
     

        <h1>Course Information</h1>
        
        <table>
            <tr>
                <td>
                    <label for="faculty">Faculty:</label>
                    <?php 
                        echo "<select id='faculty' name='faculty'>" ;
                        $faculties=['Faculty of Applied Sciences','Faculty of Bussiness Studies','Faculty of Technological Studies'];
                        foreach($faculties as $f){
                            if($f == $faculty){
                                echo "<option value='$f' selected>$f</option>";
                            }
                            else{
                                echo "<option value='$f'>$f</option>";
                            }
                        }
                    ?>
                    </select>
                </td>
                <td>
                    <label for="department">Department:</label>
                    <?php echo "<input type='text' id='department' name='department' value='$department'>" ?>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <label for="degree">Course:</label>
                    <?php echo "<input type='text' id='course' name='course' value='$course'>" ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="year">Academic Year:</label>
                    <?php echo "<input type='text' id='academicYear' name='academicYear' value='$academicYear'>" ?>
                </td>
                <td>
                    <label for="level">Level:</label>
                    <?php 
                        echo "<select id='level' name='level'>" ;
                        $levels=['First Year','Second Year','Third Year','Fourth Year'];

                        foreach($levels as $l){
                            if($l == $level){
                                echo "<option value='$l' selected>$l</option>";
                            }
                            else{
                                echo "<option value='$l'>$l</option>";
                            }
                        }

                    ?>
                    </select>
                </td>
            </tr>
        </table>

        <h1>Examination Results</h1>
        
        <table>
            <tr>
                <td>
                    <label for="gpa">GPA:</label>
                    <?php echo "<input type='text' id='gpa' name='gpa' value='$gpa'>" ?>
                    <a href="https://www.calculator.net/gpa-calculator.html" target=_blank>Calculate your GPA value</a><br><br>
                </td>
                <td>
                    <label for="credits">Total Number Of Credits:</label>
                    <?php echo "<input type='number' id='credits' name='credits' value='$credits'>" ?>
                </td>
            </tr>
        </table>
        
        <label for="class">Class:</label>
        <?php 
            echo "<select id='class' name='class'>"; 
            $classes=['First Class','Second Class Upper','Second Class Lower','General Class'];
            foreach($classes as $c){
                if($c == $class){
                    echo "<option value='$c' selected>$c</option>";
                }
                else{
                    echo "<option value='$c'>$c</option>";
                }
            }
        
        ?>
        </select>
      

        <h1>Extra-curricular Activities</h1>
        
        <?php echo "<textarea id='extra' name='extra' value='$extra'>$extra</textarea>" ?>
       

        <h1>My Skills</h1>

        <div class="skills">
            <div class="item-left">
                <label for="programmingLang">Programming Languages:</label><br>

                <?php
                    $progammingLanguages=explode(',',$progammingLanguages);
                    $allProgrammingLanguages=['C','C++','C#','Java','Python','Ruby','Assembly','Machine Language','Perl','COBOL','Fortran'];

                    foreach($allProgrammingLanguages as $lang){
                        if(in_array($lang,$progammingLanguages)){
                            echo "<input type=checkbox name=progLang[] id=progLang value='$lang' checked='checked'>$lang<br>";
                        }
                        else{
                            echo "<input type=checkbox name=progLang[] id=progLang value='$lang'>$lang<br>";
                        }
                    }

                ?>
            </div>
            <br>
            <div class="item-right">
                <label for="webDesigning">Web Designing Tools:</label><br>
                <?php

                    $webDesigningTools = explode(',', $webDesigningTools);     
                    $allWebDesigningTools = ['HTML', 'CSS', 'JavaScript', 'PHP', 'NodeJS', 'React', 'Foundation', 'webflow', 'shopify', 'WordPress', 'GitHub'];

                    foreach($allWebDesigningTools as $wdt){
                        if(in_array($wdt,$webDesigningTools)){
                            echo "<input type=checkbox name=webDesigning[] id=webDesigning value='$wdt' checked>$wdt<br>";
                        }
                        else{
                            echo "<input type=checkbox name=webDesigning[] id=webDesigning value='$wdt'>$wdt<br>";
                        }
                    }  
                ?>
            </div>
        </div>
        <br>
        <div class="skills">
            <div class="item-left">
                <label for="framework">Frameworks:</label><br>
                <?php

                    $frameworks = explode(',', $frameworks);     
                    $allFrameworks = ["Django", "Angular", "ASP.NET Core", "Flask", "CakePHP", "Apache Wicket", "Yesod", "Drupal", "Sinatra", "Rubi on Rails", "Bootstrap", "Express.js", "AngularJS", "JQuery", "FuelPHP"];

                    foreach($allFrameworks as $frm){
                        if(in_array($frm,$frameworks)){
                            echo "<input type=checkbox name=framewowk[] id=framework value='$frm' checked>$frm<br>";
                        }
                        else{
                            echo "<input type=checkbox name=framework[] id=framework value='$frm'>$frm<br>";
                        }
                    }  
                ?>
            </div>
            <br>
            <div class="item-right">

                <label for="database">Database Management Tools:</label><br>
                <?php

                    $databases = explode(',', $databases);     
                    $allDatabases = ["MySQL", "PostgreSQL", "Microsoft Access", "Redis", "Oracle Database", "MongoDB", "MariaDB", "SQLite", "Microsoft SQL Server"];

                    foreach($allDatabases as $db){
                        if(in_array($db,$databases)){
                            echo "<input type=checkbox name=database[] id=database value='$db' checked>$db<br>";
                        }
                        else{
                            echo "<input type=checkbox name=database[] id=database value='$db'>$db<br>";
                        }
                    }  
                ?>
            </div>
        </div>
        <br>

        <h1>My projects</h1>
        
        <table>
            <tr>
                <td><input type="text" id="projLink" name="projLink" placeholder="Enter your Project Link"></td>
                <td><input type="text" id="projDesc" name="projDesc" placeholder="Description" style="height: 30px;"></td>
                <td><input type="button" id="AddButton" name="AddButton" value="Add the Project" onclick="addProject();"></td>
            </tr>
        </table>
        

        <table id="projectTable">
            <tr>
                <th>Project Link</th>
                <th>Description</th>
                <th></th>
            </tr>           
            <tbody>

                <?php
        
                    $q2 = "SELECT project_link,project_description FROM project_details WHERE regNo='$data'";

                    $result=mysqli_query($conn,$q2);

                    while($row=mysqli_fetch_row($result)){
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "</tr>";
                    }
                    
                ?>

            </tbody>           
        </table>

        <br>
        <br>

        <h1>Work Experience</h1>
        
        <table>
            <tr>
                <td colspan='2'><input type="text" id="title" name="title" placeholder="Enter the title"></td>
            </tr>
            <tr>
                <td><input type="text" id="company" name="company" placeholder="Company Name" style="height: 30px;"></td>
                <td><input type="text" id="duration" name="duration" placeholder="Duration ( From - To )"></td>
            </tr>
            <tr>
                <td><input type="text" id="description" name="description" placeholder="Description"></td>
                <td><input type="button" id="AddButton" name="AddButton" value="Add the Work Experience" onclick="addExperience();"></td>
            </tr>
        </table>
        

        <table id="experienceTable">
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Duration</th>
                <th>Description</th>
                <th></th>
            </tr>           
            <tbody>
                <?php
            
                    $q3 = "SELECT title,company_name,duration,description FROM work_experience WHERE regNo='$data'";

                    $result3=mysqli_query($conn,$q3);

                    while($row=mysqli_fetch_row($result3)){
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }   
                ?>

            </tbody>           
        </table>       
        <br>
        <br>
        <button type="submit" class="submitBtn" id="submit" name="submit">Submit</button><br><br><br><br>
       </form>
    <?php
        include("footer.html");
    ?>
    <script src="scripts/studentinfo.js"></script>
</body>
</html>