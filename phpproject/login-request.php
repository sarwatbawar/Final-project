<?php
session_start();
include("connection.php");
if($_SERVER['REQUEST_METHOD']="post")
{

if(empty($_POST['username']) || empty($_POST['password']))
{
header("location:login.php?msg=You submitted blank fields. Please enter username and password.");
}
else
{
$username = $_POST['username'];
$password =  $_POST['password'];
$q = mysqli_query($connect,"select * from signup where name = '$username' AND password = '$password'") or die(mysqli_error($connect));
$rec = mysqli_num_rows($q);
if($rec=="1")
{
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("location:user-home.php");
}
else
{
header("location:login.php?msg=User not found. Please enter correct username or password.");?>

<?php
}
}
}
?>



<!-- session_start();
include 'connection.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
}
if(empty($_POST['username']) || empty($_POST['password']))
{
header("location:login.php?msg=You submitted blank fields. Please enter username and password.");
}
else{
	$username = $_POST['username'];
$password = $_POST['password'];
$query= "SELECT * FROM signup where name='$username' AND password='$password'";
if (mysqli_query($connect,$query)) {
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("location:index.php");
}
else{
	echo "There is an error";
}
}
 -->






