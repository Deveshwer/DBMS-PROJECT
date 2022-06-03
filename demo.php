//replace with this code instead of the code that is in demo.php in examples
<?php
$servername = "127.0.0.1";
$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "review";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    
    die("failed to connect!");
} 

if (PHP_SAPI != 'cli') {
	echo "<pre>";
}
require_once __DIR__ . '/../autoload.php';
$sentiment = new \PHPInsight\Sentiment();
$sql1 = "Select * from review_content";
$res = mysqli_query($con , $sql1);
while($row = mysqli_fetch_assoc($res))
{
	$string = $row['Description'];
	$product = $row['Product_name'];
	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);
	$json = json_encode($scores); 
	// output:
	$query1 = "insert into sentiment (productid,sentimentper) values('$product','$json')";
	$result = mysqli_query($con , $query1);
	echo "String: $string\n";
	echo "Dominant: $class, scores: ";
	print_r($scores);
//	echo $json;
	echo "\n";
}
mysqli_close($con);
?>
