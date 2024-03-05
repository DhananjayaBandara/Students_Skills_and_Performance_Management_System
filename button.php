<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Page</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@200;300&family=Patua+One&display=swap" rel="stylesheet">
    <style>
        body{
          background-image:linear-gradient(to bottom,rgb(114 115 95 / 62%),rgb(0 0 0 / 82%)),url("assests/background for button page.png");
          background-repeat: no-repeat;
          background-size: 100%;
          
        }
        
        .box{
            width:800px;
            height:600px;
            background-color:#fbfbfbb5;
            position:relative;
            top:300px;
            left:50%;
            transform:translate(-50%,-50%);
            border-radius: 5px;
            border:2px solid crimson;
            border-color: red;
            font-family: 'Noto Sans JP', sans-serif;
            font-family: 'Patua One', serif;
            font-size: 24px;
            margin: 20px;
            
           
        }
        .button{
            width:190px;
            height:120px;
            background-color:transparent;
            border-radius: 10px;
            border:2px solid black;
            border-color: red;
            text-align: center;
            position: relative;  
            top:30%;
            cursor:pointer;
        }
        .empbtn{
          width: 30%;
          float: left;
          left:80px;

        }
        .stubtn{
          width: 30%;
          float: right;
          right: 80px;
        }
        .button:hover{
          border:5px solid crimson;
          background-color: black;
          color: white;
        }
        .button::before{
          border:1px solid black;
        }
        .transbox {
          height: 60px;
          width: auto;
          background-color: #040202f7;
          opacity: 0.6;
        }
        

    </style>
</head>
<body>

  <?php
    include("header.html");
  ?>
  
    <div class="box">
      
        <h1 class="display-6" style="text-align: center; margin-top:10%; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Proceed as a Searcher or a Student!</h1>
        <button class="button empbtn" onclick="location.href='searcherLogin.php'">I am looking for a student</button>
        <button class="button stubtn" onclick="location.href='studentLogin.php'">I am a student</button>
        
    </div>
    <br>
  <?php
      include("footer.html");
  ?>
    
</body>
</html>