
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    
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
        session_start();
        $loggedStuRegNnum =  $_SESSION['stuRegNum'];
        include("header.html");
        
    ?>

    <form action="functions/process-form.php" method="post" autocomplete="off" enctype="multipart/form-data" name="stuData">

        <h1>Personal Info</h1>
        
        <label for="regNo">Registration Number:</label>
        <input type="text" id="regNo" name="regNo" value="<?php echo $loggedStuRegNnum; ?>" disabled>

        <table>
            <tr>
                <td>
                    <label for ="initialName">Name with Initials:</label>
                    <input type="text" id="initialName" name="initialName">
                </td>
                <td>
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName">
                </td>
            </tr>
        </table>
        
        
        <label for="bio">Bio:</label>
        <textarea id="bio" name="bio" placeholder="Please Enter your details to display on your profile Bio:
Example:
    Motivated college student with a Bachelor of Science from University of vavuniya, Sri Lanka 
    seeking an internship opportunity with Synthex Inc., to use my information and communication skills to 
    help create effective social campaigns. Experienced in project planning, time management, 
    and problem-solving, with notable achievements in research projects and the workplace. "></textarea>


        <label for="district">District:</label>
        <select id="district" name="district">
            <option value="" selected hidden>Select Your District</option>
            <option value="Ampara">Ampara</option>
            <option value="Anuradhapura">Anuradhapura</option>
            <option value="Badulla">Badulla</option>
            <option value="Batticaloa">Batticaloa</option>
            <option value="Colombo">Colombo</option>
            <option value="Galle">Galle</option>
            <option value="Gampaha">Gampaha</option>
            <option value="Hambantota">Hambantota</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kalutara">Kalutara</option>
            <option value="Kandy">Kandy</option>
            <option value="Kegalle">Kegalle</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Kurunegala">Kurunegala</option>
            <option value="Mannar">Mannar</option>
            <option value="Matale">Matale</option>
            <option value="Matara">Matara</option>
            <option value="Monaragala">Monaragala</option>
            <option value="Mullaitivu">Mullaitivu</option>
            <option value="Nuwara Eliya">Nuwara Eliya</option>
            <option value="Polonnaruwa">Polonnaruwa</option>
            <option value="Puttalam">Puttalam</option>
            <option value="Ratnapura">Ratnapura</option>
            <option value="Trincomalee">Trincomalee</option>
            <option value="Vavuniya">Vavuniya</option>
        </select>

        <label for="school">School Attended:</label>
        <input type="text" id="school" name="school">

        <table>
            <tr>
                <td>
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
                </td>
                <td>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age">
                </td>
            </tr>
        </table>
       




        <fieldset>
            <label for="gender">Gender:</label><br>
            <input type="radio" name="gender" value="Male" id="gender" checked>Male
            <input type="radio" name="gender" value="Female" id="gender">Female<br>
        </fieldset>

        <h1>Contact Info</h1>
    
        <table>
            <tr>
                <td>
                     <label for="mobileNo">Mobile Number:</label>
                     <input type="telephone" id="mobileNo" name="mobileNo">
                </td>
                <td>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </td>
            </tr>
        </table>
       
    
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea>
     

        <h1>Course Information</h1>

        <table>
            <tr>
                <td>
                    <label for="faculty">Faculty:</label>
                    <select id="faculty" name="faculty">
                        <option value="" selected hidden>Select Your Faculty</option>
                        <option value="Faculty of Applied Sciences">Faculty of Applied Sciences</option>
                        <option value="Faculty of Bussiness Studies">Faculty of Bussiness Studies</option>
                        <option value="Faculty of Technological Studies">Faculty of Technological Studies</option>
                    </select>
                </td>
                <td>
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department">
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <label for="degree">Course:</label>
                     
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="course" name="course"> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="year">Academic Year:</label>
                    <input type="text" id="academicYear" name="academicYear">
                </td>
                <td>
                    <label for="level">Level:</label>
                    <select id="level" name="level">
                        <option value="" selected hidden>Select Your Level</option>
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year</option>
                        <option value="Fourth Year">Fourth Year</option>
                    </select>
                </td>
            </tr>
        </table>
        <h1>Examination Results</h1>
        <table>
            <tr>
                <td>
                    <label for="gpa">GPA:</label>
                    <input type="text" id="gpa" name="gpa">
                    <a href="https://www.calculator.net/gpa-calculator.html" target=_blank>Calculate your GPA value</a><br><br>
                </td>
                <td>
                    <label for="credits">Total Number Of Credits:</label>
                    <input type="number" id="credits" name="credits">
                </td>
            </tr>
            <tr>
                <td>
                <label for="class">Class:</label>
                    <select id="class" name="class">
                        <option value="" selected hidden>Select Your Class</option>
                        <option value="First Class">First Class</option>
                        <option value="Second Class Upper">Second Class Upper</option>
                        <option value="Second Class Lower">Second Class Lower</option>
                        <option value="General Class">General Class</option>
                    </select>
                </td>
                <td></td>
            </tr>
        </table>

        <h1>Extra-curricular Activities</h1>
        
        <textarea id="extra" name="extra"></textarea>
       
        <h1>My Skills</h1>
        <div class="skills">
            <div class="item-left">
                <label for="programmingLang">Programming Languages:</label><br>
                <input type="checkbox" name="progLang[]" id="progLang" value="C">C Language<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="C++">C++ Language<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="C#">C# Language<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Java">Java<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Python">Python<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Ruby">Ruby Language<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Assembly">Assembly Language<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Machine Language">Machine Language<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Perl">Perl<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="COBOL">COBOL<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Rust">Rust<br>
                <input type="checkbox" name="progLang[]" id="progLang" value="Fortran">Fortran<br>
            </div>
            <br>
            <div class="item-right">
                <label for="webDesigning">Web Designing Tools:</label><br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="HTML">HTML<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="CSS">CSS<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="JavaScript">JavaScript<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="PHP">PHP<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="NodeJS">NodeJS<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="React">React<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="Foundation">Foundation<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="webflow">webflow<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="shopify">shopify<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="WordPress">WordPress<br>
                <input type="checkbox" name="webDesigning[]" id="webDesigning" value="GitHub">GitHub<br>
            </div>
        </div>
        <br>
        <div class="skills">
            <div class="item-left">
                <label for="framework">Frameworks:</label><br>
                <input type="checkbox" name="framework[]" id="framework" value="Django">Django<br>
                <input type="checkbox" name="framework[]" id="framework" value="Angular">Angular<br>
                <input type="checkbox" name="framework[]" id="framework" value="ASP.NET Core">ASP.NET Core<br>
                <input type="checkbox" name="framework[]" id="framework" value="Flask">Flask<br>
                <input type="checkbox" name="framework[]" id="framework" value="CakePHP">CakePHP<br>
                <input type="checkbox" name="framework[]" id="framework" value="Apache Wicket">Apache Wicket<br>
                <input type="checkbox" name="framework[]" id="framework" value="Yesod">Yesod<br>
                <input type="checkbox" name="framework[]" id="framework" value="Drupal">Drupal<br>
                <input type="checkbox" name="framework[]" id="framework" value="Sinatra">Sinatra<br>
                <input type="checkbox" name="framework[]" id="framework" value="Rubi on Rails">Rubi on Rails<br>
                <input type="checkbox" name="framework[]" id="framework" value="Bootstrap">Bootstrap<br>
                <input type="checkbox" name="framework[]" id="framework" value="Express.js">Express.js<br>
                <input type="checkbox" name="framework[]" id="framework" value="AngularJS">AngularJS<br>
                <input type="checkbox" name="framework[]" id="framework" value="JQuery">JQuery<br>
                <input type="checkbox" name="framework[]" id="framework" value="FuelPHP">FuelPHP<br>
            </div>
            <br>
            <div class="item-right">
                <label for="database">Database Management Tools:</label><br>
                <input type="checkbox" name="database[]" id="database" value="MySQL">MySQL<br>
                <input type="checkbox" name="database[]" id="database" value="PostgreSQL">PostgreSQL<br>
                <input type="checkbox" name="database[]" id="database" value="Microsoft Access">Microsoft Access<br>
                <input type="checkbox" name="database[]" id="database" value="Redis">Redis<br>
                <input type="checkbox" name="database[]" id="database" value="oracle">Oracle Database<br>
                <input type="checkbox" name="database[]" id="database" value="MongoDB">MongoDB<br>
                <input type="checkbox" name="database[]" id="database" value="MariaDB">MariaDB<br>
                <input type="checkbox" name="database[]" id="database" value="SQLite">SQLite<br>
                <input type="checkbox" name="database[]" id="database" value="Microsoft SQL Server">Microsoft SQL Server<br>
            </div>
            <br>
        </div>
        
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

            </tbody>           
        </table>

        <br>
        <br>

        <h1>Work Experiences</h1>
        
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

            </tbody>           
        </table>
        <br>
        <br>
        <button type="submit" class="submitBtn" id="submit" name="submit">Submit</button><br><br><br>
       </form>
    <?php
        include("footer.html");
    ?>
    <script src="scripts/studentinfo.js"></script>
</body>
</html>