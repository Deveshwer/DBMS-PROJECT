<?php
session_start();
     include("connection.php");
     include("functions.php");
     $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <div class="home">
        <div class="Rectangle">
            <div class="appname"><h2>PREVIEW</h2></div>
            <div class="login"><h3>LOGIN</h3></div>
            <div class="signup"><h3>SIGN UP</h3></div>
        </div>
    </div>
</body>
</html>