<?php
$localhost   = "localhost";
$username    = "root";
$password    = "";
$mydb        = "future_db";

$conn = mysqli_connect($localhost, $username, $password, $mydb);

if(! $conn){
 die("Connection is failed to connect: " . mysqli_connect_error());
}
// echo "Connected successfully";


?>