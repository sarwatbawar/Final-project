<?php
echo "Data Added";
include 'connection.php';
$username = $_POST['username'];
$password  = $_POST['password'];
$address = $_POST['address'];


$insert = "INSERT INTO signup (name,password,address) VALUES ('$username','$password','$address')";

if (mysqli_query($connect,$insert)) {
header("location:login.php");
}
else{

	echo "there is an error";
}
?>
