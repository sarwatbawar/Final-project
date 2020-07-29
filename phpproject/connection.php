<?php

$db_name ="store";
$db_user = "root";
$db_pas = "";
$db_host ="localhost";

$connect = new mysqli($db_host,$db_user,$db_pas,$db_name);

if($connect->connect_error){
 echo "Connection error";
}
else{
	echo "";
}
?>