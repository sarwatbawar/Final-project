<?php
include 'header.php';
include 'connection.php';
$alldata = "SELECT * FROM product";
//Execute Query
$result = mysqli_query($connect,$alldata);
?>

<div class="container mt-5">
	<?php
	while ($row = mysqli_fetch_array($result)) {
						
						?>
						<div class="col-lg-3 mb-5">
							<div class="card card_design" style="height: 420px;">
								<div style="padding: 20px;">
							  		<img class="card-img-top img-thumbnail" src="images/<?php echo $row['product_image']; ?>" alt="Card image cap" style="height: 200px !important;width: 100% !important;">
							    </div>
							  <div class="card-body">
							    <h4 class="card-title"><?php echo $row['product_name']; ?></h4>
							  </div>
							  <div class="card-body bottom" style="padding-top: 0;">
							  	<div class="row">
							  		<div class="col-md-6">
							  			<span><strong>Rs. <?php echo $row['price']; ?></strong></span>
							  		</div>
							  		<div class="col-md-6 text-right">
							  			<a href="#?add=<?php echo $row['product_id']; ?>" class="cart_btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add</a>
							  		</div>
							  	</div>
							  </div>
							</div>
						</div>

						<?php

					}?>

</div>