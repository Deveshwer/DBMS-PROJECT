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
    <!-- <link rel="stylesheet" href="styles.css">   */ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
    <style>
        #icon{
            position: absolute;
            width: 57.33px;
            height: 70.3px;
            left: 0px;
            top: 20px;
        }
        #icon1 {
            position: absolute;
            width: 57.33px;
            height: 50.75px;
            left: 0px;
            top: 20px;
        }
        #icon1a {
            position: absolute;
            width: 57.33px;
            height: 50.75px;
            left: 0px;
            top: 20px;

            background: #C4C4C4;
            border-radius: 0px 266.667px 266.667px 266.667px;
            transform: matrix(1, 0, 0, -1, 0, 0);
        }
        #icon2 {
            position: absolute;
            width: 44.78px;
            height: 70.3px;
            left: 0px;
            top: 0px;
        }
        #icon2a{
            position: absolute;
            width: 44.78px;
            height: 70.3px;
            left: 0px;
            top: 0px;

            background: #C4C4C4;
            border-radius: 0px 266.667px 266.667px 266.667px;
            transform: matrix(1, 0, 0, -1, 0, 0);
        }
        #app{
            position: absolute;
            font-size:30px;
            top: 10px;
            left:60px;
            font-family: 'Spline Sans Mono', monospace;
            font-weight:1000;
        }
        #box {
            position: absolute;
            width: 1600px;
            height: 75px;
            left: 0px;
            top: 0px;
            background-color:lightblue;
        }
        #rectangle {
            position: absolute;
            width: 645.54px;
            height: 28px;
            margin-left:250px;
            margin-top: 5px;
     /*       margin-right:637.33px;
            margin-bottom:850px;    */
        }
        #home {
            position: absolute;
            width: 57.33px;
            height: 28px;
            margin-left:250.33px;
            margin-top: 6px;
        /*    margin-right:1225.33px;
            margin-bottom:850px;       */

            font-family: 'Spline Sans Mono', monospace;
            font-style: normal;
            font-weight: 70;
            font-size: 18.6667px;
            line-height: 28px;
            /* identical to box height */
        }
        #explore {
            position: absolute;
        width: 86px;
        height: 29px;
        margin-left: 776px;
        margin-top: 72px;
        margin-right:866px;
        margin-bottom:1113px;
        font-family: 'Proxima Nova';
        font-style: normal;
        font-weight: 40;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: 0.04em;
        }
        #review {
            position: absolute;
            width: 150px;
            height: 28px;
            margin-left:550.67px;
            margin-top: 5px;
        /*    margin-right:753.33px;
            margin-bottom:850px;    */

            font-family: 'Spline Sans Mono', monospace;
            font-style: normal;
            font-weight: 60;
            font-size: 18.6667px;
            line-height: 28px;
            /* identical to box height */
        }
        #logoutbox {
            box-sizing: border-box;

            position: absolute;
            width: 80.33px;
            height: 52px;
            left: 1201.33px;
            top: 5px;
            background-color: grey;
            border: 2.5px solid #000000;
            border-radius: 7px;

     /*       margin-right:165.33px;
            margin-bottom:840px;    */
        }
        #logout {
            position: absolute;
            width: 105.33px;
            height: 28px;
            margin-left:12100.33 px;
            margin-top: 5.5px;
      /*      margin-right:189.33px;
            margin-bottom:850.67px; */

            font-family: 'Spline Sans Mono', monospace;
            font-style: normal;
            font-weight: 600;
            font-size: 18.6667px;
            line-height: 28px;
            /* identical to box height */
        }
    </style>
</head>
<body style="background-color:black">
    <div id="box">  
    <div id="app">PREVIEW</div>
    <div id="rectangle">
        <div id="home"><a href="index.php">HOME</a></div>
        <div id="review"><a href=review.php>ADD REVIEW</a></div>
    </div>
    <div id="logoutbox">
        <div id="logout"><a href="logout.php">LOGOUT</a></div>
    </div>
    </div>
</body>
</html>
