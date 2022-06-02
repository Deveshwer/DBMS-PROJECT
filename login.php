<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING IS POSTED
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $myfile = fopen("userid.txt","w") or die("Unable to open file!");
        fwrite($myfile,"$user_name");
        fclose($myfile);
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //reading from database
            $query = "select * from users where user_name = '$user_name' limit 1"; 
            $result = mysqli_query($con,$query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password']===$password)
                    {
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }                   
                }
            }
        echo "wrong username or password";
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
        <div class="headline1">WELCOME BACK</div>
        <div class="headline2">Welcome back,please enter your details.</div>
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
            <input id="submit" type="submit" value="LOGIN" onmouseover="colorchange(this)" onmouseout="colornormal(this)">
           <a href="signup.php" id="upd">SIGNUP</a>
           <script>
               function colorchange(x){
                   x.style.background-color="green";
               }
               function colornormal(x){
                   x.style.background-color="#EA454C";
               }
            </script>
    </form>             
    <img src="c392ba101244345.5f1a2d7ad1371.jpg" style="width:800px; height:757px; margin-left:657px; margin-top:6px;margin-right:17px;margin-bottom:6px;"> 
</body>
</html>
