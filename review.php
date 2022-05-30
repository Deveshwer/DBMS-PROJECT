<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
    <style>
    body {
    background-color: black;
    
  }
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
  h1 {
    color: rgb(200, 113, 0);
    margin-left: 20px;
  }
 /* div {
 width: 300px;
    padding: 50px;
    margin: 20px;
  } */  
  input {
    width: 100%;
  }
  label {
      color: rgb(255, 255, 255);
  }
  input[type=text] {
    border: 3px solid red;
    border-radius: 10px;
  }
  input[type=button], input[type=submit], input[type=reset] {
    background-color: #04AA6D;
    border-radius: 40px;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
  }
  #select_category {
    text-align: center;
    border-radius: 40px;
    background-color: rgb(0, 255, 183);
  }
  #desc{
    border-radius: 1px;

  }
  rating-control{
      border-radius: 20px;
  }
  #form-control{
    border-radius: 20px;

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
</div>   
    <form method="post" action="review1.php" enctype="multipart/form-data">  


    <div>    
    <label for="pname">Product Name</label><input type="text" id="pname" name="pname"><br>
        <label for="bname">Brand</label><input type="text" id="bname" name="bname"><br>
        <div class="category">
        <label for="select_category">Category</label> 
            <select id="select_category" name="sel_cat">
                <option value="0" disabled selected>Select Category</option>
            <option value="Clothing">Clothing</option>
            <option value="Electronics">Electronics</option>
            <option value="Home Accessories">Home Accessories</option>
            </select>
        </div>
        <label for="desc">Description</label><br>
        <textarea id="desc" name="desc" rows="20" cols="30"></textarea><br>
        <input type="file" name="image"><br>
        <div class="form-group">
            <label for="rating_control">Rating</label>
            <input type="number" id="rating_control" name="rating_control" class="form-control" step="0.1" max="5" placeholder="Rate 1 - 5">
          </div>
        <input type="reset">
        <input type="submit" name = "submit1" value="upload">
    </div>
</form>  
</body>
</html>