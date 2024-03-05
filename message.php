<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfull</title>

    <style>
        body{
            background-color: #202b38;
            display: flex;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .rect{
            margin: 20%;
            height: 60%;
            width: 65%;
            border: 2px solid red;
            border-radius: 15px;
            background-color: black;
            padding: 20px;
           
        }
        p{
            font-size: 40px;
            text-align: center;
            color: aliceblue;
           
        }
        .btn{
            align-items: center;
            display:flex;
            justify-content: center;
        }
        button{
            width: 180px;
            height: 40px;
            background-color: white;
            color: black;
            font-size: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            border-radius: 15px;
        }
        button:hover{
            background-color: #776c6c;
            color: white;
        }
    </style>
</head>
<body>
    
    <?php
    function printMessage($msg, $redirectPage){
        echo "<div class=rect>";
        echo "<p>$msg</p><br>";
        echo "<div class='btn'><button type='button' onclick=location.href='" . $redirectPage . "'>OK</button></div>";
        echo "</div>";
    }
    ?>
    
</body>
</html>
