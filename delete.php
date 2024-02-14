<?php
include_once "dbconfig.php";

$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
 header('location: read.php');
}

?>