<?php
    include 'conf/connection.php';
?>

<?php
	session_start();
	if(!$_SESSION['authenticate']){
		header('location:searcherLogin.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Search for a Student</title>
    <style>
       body{
            background-image:linear-gradient(to bottom,rgb(114 115 95 / 62%),rgb(0 0 0 / 82%)),url("assests/student search page background.jpg");
       }
       .search_button{
        height:50px; 
        width:125px; 
        color: white;
        font-size:28px; 
        text-align:center;
        background-color: #121e11;
        border-radius: 11px;
        border: 2px solid white;
       }
       .search_button:hover{
        background-color: white;
        color: black;
        border: 2px solid black;
       }
       .selection{
        height:50px; 
        width:240px; 
        font-size:20px; 
        border-radius:5px;
        text-align:center;
        background-color:#bd7777a8;
        margin: 5px;
       }
       .options{
        background-color:transparent;
        margin: 10px;
       }
    </style>
</head>
<body>
    <?php
        include("header.html");
    ?>

    <div class="container my-5">
        <div class="container d-flex align-items-center justify-content-center">
            <form method="get">
                <select class="selection" name="category" id="category">
                    <option class="options" value="regNo" name="regNo">Registration Number</option>
                    <option class="options" value="fullName" name="fullName">Name</option>
                    <option class="options" value="district" name="district">District</option>
                    <option class="options" value="faculty" name="faculty">Faculty</option>
                    <option class="options" value="course" name="course">Course</option>
                    <option class="options" value="level" name="level">Level</option>
                    <option class="options" value="class" name="class">Class</option>
                    <option class="options" value="progLanguage" name="progLanguage">Programming Language</option>
                    <option class="options" value="webDesign" name="webDesign">Web Designing Tools</option>
                    <option class="options" value="framework" name="framework">Frameworks</option>
                    <option class="options" value="database" name="database">Database Tools</option>

                </select>
                <input type="text" placeholder="🔍 Search Student" name="search" style="height:50px; width:700px; font-size:25px; text-align:left; border-radius:5px;">
                <button class="search_button" name="submit" margin-left="50px">Search</button>
                <hr>
            </form>   
         </div>
           

        <div class="container my-5">
            <table class="table" border='1'>
                <?php
                    if(isset($_GET['submit'])){
                        if(!empty($_GET['category'] && !empty($_GET['search']))){

                            $_SESSION['searchStu'] = $_GET['search'];
                            $_SESSION['searchCat'] = $_GET['category'];

                            $search=$_SESSION['searchStu'];
                            $category=$_SESSION['searchCat'];

                            $sql="SELECT * FROM `studentdata` WHERE `$category` like '%$search%'";
                            $result=mysqli_query($conn,$sql);
                            if($result){
                                if(mysqli_num_rows($result)>0){
                                    if($category!='regNo' AND $category != 'initialName' AND $category != 'email'){
                                        echo
                                        "
                                        <thead>
                                            <tr>
                                                <th>Registration Number</th>
                                                <th>Name</th>
                                                <th>$category</th>
                                                <th>E-mail Address</th> 
                                                <th>Profile</th>
                                            </tr>
                                        </thead> 
                                        ";

                                        while($row=mysqli_fetch_assoc($result)){
                                            
                                            echo
                                            "
                                            <tbody>
                                                    <td>$row[regNo]</td>
                                                    <td>$row[initialName]</td>
                                                    <td>
                                                    <table>";
                                                        $elements=$row[$category];
                                                        $elements=explode(',',$elements);
                                                        $i=0;
                                                        echo "<tr>";
                                                        if($elements!=null){
                                                            foreach($elements as $e){
                                                                
                                                                if($i%2==0){
                                                                    echo "<td width=200px class=element>$e</td>";
                                                                }
                                                                else{
                                                                    echo "<td width=200px class=element>$e</td>";
                                                                    echo "</tr>";
                                                                }
                                                                $i++;
                                                            }
                                                        }
                                                        echo "</table>";
                                                     

                                            echo
                                                    "</td>
                                                    <td><a href='mailto:$row[email]' target=_blank>$row[email]</a></td>
                                                    <td><button type=button class='btn btn-outline-primary' onclick=location.href='searchedProfile.php?data=$row[regNo]'>View Profile</button></td>
                                                </tr>
                                            </tbody>
                                            ";
                                        }
                                    }
                                    else{
                                        echo
                                        "
                                        <thead>
                                            <tr>
                                                <th>Registration Number</th>
                                                <th>Name</th>
                                                <th>E-mail Address</th> 
                                                <th>Profile</th>
                                            </tr>
                                        </thead> 
                                        ";

                                        while($row=mysqli_fetch_assoc($result)){
                                            echo
                                            "
                                            <tbody>
                                                    <td>$row[regNo]</td>
                                                    <td>$row[initialName]</td>
                                                    <td><a href='mailto:$row[email]' target=_blank>$row[email]</a></td>
                                                    <td><button type=button class='btn btn-outline-primary' onclick=location.href='searchedProfile.php?data=$row[regNo]'>View Profile</button></td>
                                                </tr>
                                            </tbody>
                                            ";
                                        }
                                    }
                                }
                                else{
                                    echo"<h1 style=color:white><b><u><center>Data Not Found!</h1></u></b>";
                                }   
                            }
                        }   
                        else{
                            echo " <h1 style=color:white><b><u><center>Please Search a Student!</h1></u></b> ";
                        }
                    }
                ?>
            </table>
            <hr>
        </div>    
    </div> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
        include("footer.html");
    ?>   
</body>
</html>