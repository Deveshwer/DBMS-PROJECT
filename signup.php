<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING IS POSTED
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //saving to database
            $user_id = random_num(20);
            $check= "select user_name from users where user_name='$user_name'";
            $result = mysqli_query($con,$check);
            $count = mysqli_num_rows($result);
            if($count > 0)
            {
                echo  "Username already taken, please use another username";
                return false;
            }
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')"; 
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        
        }
        else{
            echo "Please enter valid details";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #upd {
            box-sizing: border-box;
            position: absolute;
            width: 70.97px;
            height: 30.31px;
            margin-left:350.03px;
            margin-top:700.34px;
            margin-right:620px;
            margin-bottom:100.34px;
            background: #EA454C;
            box-shadow: 0px 4px 10px rgba(233, 68, 75, 0.25);
            border-radius: 12px;
        }
        #submit {
        box-sizing: border-box;
        position: absolute;
        width: 313.97px;
        height: 41.31px;
        margin-left:250.03px;
        margin-top:640.34px;
        margin-right:620px;
        margin-bottom:150.34px;
        background: #EA454C;
        box-shadow: 0px 4px 10px rgba(233, 68, 75, 0.25);
        border-radius: 12px;
        }
        div.transbox {
  margin-left:30px;
  margin-top:100px;
  margin-right:800px;
  margin-bottom:100px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}
.mailbox {
    position: absolute;
    width: 315px;
    height: 69.2px;
    margin-left:125px;
    margin-top:126.57px;
    margin-right:640px;
 /*   margin-bottom:374.23px;   */

}
.mail {
    position: absolute;
width: 42.34px;
height: 21.69px;

font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 21px;
text-align: center;
letter-spacing: 0.03em;

color: #181818;
margin-left:125px;
margin-top:126.57px;
margin-right:912.66px;
/*margin-bottom:421.74px;   */
}
    </style>
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
                <div class="Email">Username</div>
            <input type="text" name="user_name">
            </div>
            <div class="pass">
                <div class="pass1">Password</div>
                 <input type="password" name="password">
            </div>
            <input id="submit" type="submit" value="SIGNUP">
           <a href="login.php" id="upd">Login</a>
    </form>             
    <img src="c392ba101244345.5f1a2d7ad1371.jpg" style="width:800px; height:757px; margin-left:657px; margin-top:6px;margin-right:17px;margin-bottom:6px;"> 
</body>
</html>
