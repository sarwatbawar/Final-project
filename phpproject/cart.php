<!-- <?php 
// include 'connection.php';
// include 'header.php';
// $product_id = $_POST['product_id'];

?>


<div class="container">
	<?php $query = "SELECT * FROM product WHERE product_id = '$product_id'";
// $result = mysqli_connect($connect,$query); ?>
	<div class="row">
		<div class="col-4">
			<img src="images/<?php echo $row['product_image']; ?>" style="width: 100%;height: 100px;margin-bottom: 20px;" class="img-thumbnail">
		</div>
	</div>
</div>

 -->







<!-- 


<?php 
include 'footer.php';
?> -->