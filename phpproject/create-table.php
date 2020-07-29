 <?php

 include ('connection.php');
 //Query should be write in inverted commas
$query = "CREATE TABLE IF NOT EXISTS signup(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30) NOT NULL,password VARCHAR (30) NOT NULL, address TEXT)";
if (mysqli_query($connect,$query)){
  
 echo "Database Table Created";

}
else{
	echo "There is an error";
}

  ?>
  