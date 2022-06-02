<?php

session_start();
include("connection1.php");
include("functions.php");
// If file upload form is submitted
 
// Display status message 
 if(isset($_POST["submit1"])) {
    //Process the image that is uploaded by the user
        $imagename = mysqli_real_escape_string($con,$_FILES["image"]["name"]);
        $imagedata = mysqli_real_escape_string($con,file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysqli_real_escape_string($con,$_FILES["image"]["type"]);
        if(substr($imageType,0,5) == "image")
        {
          //  echo $imagedata;
      //      mysqli_query($con,"insert into review_content(image) values('$imagedata')");
        }
        else
        {
            echo "Only images are allowed";
        }
}   
$Product_name = $_POST['pname'];
$brand = $_POST['bname'];
$Category_name = $_POST['sel_cat'];
$Description = $_POST['desc'];
$Rating = $_POST['rating_control'];
$myfile=fopen("userid.txt","r") or die("Unable to open file");
while(!feof($myfile)){
    $user_name=fgets($myfile);
}
if(!empty($Product_name) && !empty($brand) && !empty($Category_name) && !empty($Description) && !empty($Rating))
{
    //$v = $_POST['Image'];
 //   if(!uniqueness($con,$Product_name))
 //   {
        $query1 = "insert ignore into products(Product_name) values('$Product_name')";
 //   }
    $query = "insert into review_content (Username,Product_name,brand,Category_name,Description,Rating,image) values ('$user_name','$Product_name','$brand','$Category_name','$Description','$Rating','$imagedata')";
  //  echo $query;
    if(mysqli_query($con,$query) && mysqli_query($con,$query1))
        echo "Successful, Your review has been uploaded!";
    else
        echo "Unsuccessful";
    mysqli_close($con);
//    header("Location: review.php");
}
//echo $Product_name;
//echo $brand;
//echo $Category_name;
//echo $Description;
//echo $Rating;
?>
