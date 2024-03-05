<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #202b38;
            justify-content: center;
            align-items: center;
        }
        .main-btn{
            margin: 30px;
            width: 200px;
            height: 200px;
            align-items: center;
            background-color: aqua;
            border: 2px solid white;
            border-radius: 10px;
        }
        .main-btn:hover{
            background-color: aquamarine;
            border: 3px solid red;
        }
        tbody{
            margin: 10px;
        }
        td{
            font-size: 20px;
            color: white;
            padding-left: 25px;
        }
        th{
            font-size: 25px;
            color: white;
            padding: 20px;
        }
        hr{
            color:white;
        }
    </style>
</head>
<body>
    <?php
        require_once 'conf/connection.php';
        include 'header.html';
       
            $stuCount=mysqli_num_rows(mysqli_query($conn,"SELECT regNo,email FROM student_register;"));
            $seracherCount=mysqli_num_rows(mysqli_query($conn,"SELECT username,firstName,lastName,email FROM searcher_register;"));
            $queryCount=mysqli_num_rows(mysqli_query($conn,"SELECT no,name,email,mobileNo,query FROM user_queries;"));
    ?>
    <div class="container my-5">
        <div class="container d-flex align-items-center justify-content-center">
            <form action="admin.php" method="get">
                <button class="main-btn" name="stu"><h1>View Students</h1><br><h2><?php echo $stuCount ?></h2></button>
                <button class="main-btn" name="searcher"><h1>View Searchers</h1><br><h2><?php echo $seracherCount ?></h2></button>
                <button class="main-btn" name="query"><h1>View Queries</h1><br><h2><?php echo $queryCount ?></h2></button>
            </form>
        </div>
        <hr>
    
        <div class="container my-5">
        <div class="container d-flex align-items-center justify-content-center">
        <?php
            
            if(isset($_GET["stu"]) || isset($_GET["searcher"]) || isset($_GET["query"])){
                if(isset($_GET["stu"])){
                    $q1="SELECT regNo,email FROM student_register;";
                    $result=mysqli_query($conn,$q1);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo
                            "
                            
                            <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Registration Number</th>
                                    <th>E-mail Address</th> 
                                    <th>Delete</th>
                                </tr>
                            </thead> 
                            ";
                            $i=1;
                            while($row=mysqli_fetch_assoc($result)){
                                
                                echo
                                "
                                <tbody>
                                        <td>$i</td>
                                        <td>$row[regNo]</td>
                                        <td><a href='mailto:$row[email]' target=_blank>$row[email]</a></td>
                                        <td><button onclick=location.href='functions/admin-process.php?data1=$row[regNo]' class='btn btn-outline-danger' name=stuDeleteBtn>Delete</a></td>
                                    </tr>
                                </tbody>
                                ";
                                $i++;
                            }
                            echo "</table>";
                           
                        }
                        else{
                            echo"<h1 style=color:white><b><u><center>No Students in Your Database</h1></u></b>";
                        }
                    }
                    
                }

                if(isset($_GET["searcher"])){
                    $q2="SELECT username,firstName,lastName,email FROM searcher_register;";
                    $result=mysqli_query($conn,$q2);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo
                            "
                            <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>E-mail Address</th> 
                                    <th>Delete</th>
                                </tr>
                            </thead> 
                            ";
                            $j=1;
                            while($row=mysqli_fetch_assoc($result)){
                                echo
                                "
                                <tbody>
                                    <tr>
                                        <td>$j</td>
                                        <td>$row[username]</td>
                                        <td>$row[firstName]</td>
                                        <td>$row[lastName]</td>
                                        <td><a href='mailto:$row[email]' target=_blank>$row[email]</a></td>
                                        <td><button onclick=location.href='functions/admin-process.php?data2=$row[username]' class='btn btn-outline-danger' name=SeracherDeleteBtn>Delete</a></td>
                                    </tr>
                                </tbody>
                                ";
                                $j++;
                            }
                            echo "</table>";
                        }
                        else{
                            echo"<h1 style=color:white><b><u><center>No Searchers in Your Database!</h1></u></b>";
                        }
                    }
                }

                if(isset($_GET["query"])){
                    $q3="SELECT no,name,email,mobileNo,query FROM user_queries;";
                    $result=mysqli_query($conn,$q3);
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo
                            "
                            <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>E-mail Address</th> 
                                    <th>Mobile Number</th>
                                    <th>Query</th>
                                    <th>Remove</th>
                                </tr>
                            </thead> 
                            ";
                            $k=1;
                            while($row=mysqli_fetch_assoc($result)){
                                echo
                                "
                                <tbody>
                                    <tr>
                                        <td>$k</td>
                                        <td>$row[name]</td>
                                        <td><a href='mailto:$row[email]' target=_blank>$row[email]</a></td>
                                        <td>$row[mobileNo]</td>
                                        <td>$row[query]</td>
                                        <td><button onclick=location.href='functions/admin-process.php?data3=$row[no]' class='btn btn-outline-danger' name=queryDeleteBtn>Remove</a></td>
                                    </tr>
                                </tbody>
                                ";
                                $k++;
                            }
                            echo "</table>";
                        }
                        else{
                            echo"<h1 style=color:white><b><u><center>Queries Not Found!</h1></u></b>";
                        }
                    }
                }
            }

            
            
        ?>
        </div>
        </div>
        <hr>
    </div>
    
    <?php
        include 'footer.html';
    ?>
</body>
</html>