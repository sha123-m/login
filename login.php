<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>login</title>
</head>
<body>
    <style type="text/css">
        #text{
            height: 15px;
            border-radius: 5px;
            padding: 4px;
            border:solid thin #aaa;
            width:100%
           

        }
        #password{
            height: 15px;
            border-radius: 5px;
            padding: 4px;
            border:solid thin #aaa;
            width:100%
           

        }
        #button{
            padding:10px;
            width:100px;
            color:black;
            background-color:lightblue;
            border: none;
        }
        #box{
            background-color:grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
        </style>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: black;">login</div>
            <input id="text"type="text" name="user_name"><br><br>
            <input id="password"type="password" name="password"><br><br>

            <input id="button" type="submit" value="login"><br><br>
            <a href="signup.php">click to signup</a><br><br>
       </form>
    </div>



    
</body>
</html>