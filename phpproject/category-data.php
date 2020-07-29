<?php
include 'connection.php';
$category_name = $_POST['category_name'];
echo $category;
$query = "INSERT INTO product_categories (category_name) Values ('$category')";
if (mysqli_query($connect,$query)) {
	header('location:categories.php?msg=Data added Successfuly');
}
else{

	echo "Data not inserted";
}
?>