<?php

session_start();
include("connection.php");
include("function.php");
$user_data=check_login($con);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>hardware system</title>
</head>
<body>
    <a href="logout.php">logout </a> 
    <h1>This is the index page</h1> 
    <br>
    hello,username. 
    
</body>
</html>