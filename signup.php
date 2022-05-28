<?php
session_start();

    include("connection.php");
    include("functions.php");

//    if($_SERVER['REQUEST_METHOD'] == "POST")
//    {
        //SOMETHING IS POSTED
//        $user_name = $_POST['user_name'];
//        $password = $_POST['password'];

//        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
//        {
//            //saving to database
//            $user_id = random_num(20);
//            $query = "insert into users (user_id,user_name,password) values ( '$user_id','$user_name','$password')"; 
//            mysqli_query($con,$query);
//            header("Location: login.php");
//            die;
        
//        }
//        else{
//            echo "Please enter valid details";
//        }
//    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
</head>
<body>
  <!--  <div class="rectangle">-->
    <div class="headline">
        <div class="headline1">WELCOME</div>
        <div class="headline2">Please sign up to proceed further!</div>
    </div>
        <form method="post">
            <div class="emailbox">
                <div class="Email">email</div>
            <input type="text" name="user_name">
            </div>
            <div class="pass">
                <div class="pass1">Password</div>
                 <input type="password" name="password">
            </div>
            <input type="submit" value="signup">
        <a href="login.php">Clock to login</a>
</form>         

</body>
</html>