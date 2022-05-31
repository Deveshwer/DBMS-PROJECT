<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reviewstyle.css">
    <style>
        body {
    /*      background-image=:url("review_pg.jpg");*/
   /* background-color: rgb(239, 144, 0);*/
  }
  
  h1 {
    color: rgb(200, 113, 0);
    margin-left: 20px;
  }
  div {
    width: 300px;
    padding: 50px;
    margin: 20px;
  }
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
    border-radius: 5px;
    width: 500px;
    MARGIN-LEFT:20PX;

  }
  rating-control{
      border-radius: 20px;
      margin-left:20px;
  }
  #form-control{
    border-radius: 20px;

  }
</style>    
</head>
<body>
    
<form method="post" action="review1.php" enctype="multipart/form-data">  
    <div>    
    <label for="pname">Product Name</label><input type="text" id="pname" name="pname"><br><br>
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
        <label for="desc">DESCRIPTION</label><br><br>
        <textarea id="desc" name="desc" rows="20" cols="30"></textarea><br><br>
        <input type="file" name="image" style="color:yellow;"><br>
        <div class="form-group">
            <label for="rating_control">Rating</label>
            <input type="number" id="rating_control" name="rating_control" class="form-control" step="0.1"  min="0" max="5" placeholder="Rate 1 - 5">
          </div>
        <input type="reset">
        <input type="submit" name = "submit1" value="upload">
    </div>
</form>  
</body>
</html> 
