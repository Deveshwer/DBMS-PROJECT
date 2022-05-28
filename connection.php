<?php
$servername = "127.0.0.1";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if(!$con = mysqli_connect($servername,$dbuser,$dbpass,$dbname))
{
    
    die("failed to connect!");
}   