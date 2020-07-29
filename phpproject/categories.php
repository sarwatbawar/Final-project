<?php
include 'connection.php';
include 'admin-header.php';
$alldata = "SELECT * FROM product_categories";
//Execute Query
$result = mysqli_query($connect,$alldata);
?>
<div class="container mt-5">
	<h5 class="mt-5">All Product Categories</h5>
	<div class="row">
		<div class="col-lg-4" style="background-color: tomato;">
      <?php
        if (isset($_GET['edit'])) {
          $edit_id = $_GET['edit'];
          $fetch = "SELECT * FROM product_categories WHERE category_id = $edit_id";
          $result = mysqli_query($connect,$fetch);
          $row = mysqli_fetch_assoc($result);
          $category = $row['category_name'];
          ?>
          <form action="" method="POST">
            <?php
                if(isset($_POST['update'])){
                  $category_name = $_POST['category_name'];
                  $update= "UPDATE product_categories SET category_name = '$category_name' WHERE category_id = '$edit_id'";
                  $query = mysqli_query($connect,$update);
                  ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> Category Updated Successfully!!!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                <?php                                        
                }
                ?>
                <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category_name" value="<?php echo $row['category_name']; ?>" class="form-control" required="">            
                </div>
                <div class="form-group">
                      <input type="submit" name="update" value="Update" class="btn btn-primary">
                      <a href="categories.php" class="btn btn-warning">Cancel</a>
                </div>
                </form>
              <?php
              }
         else{
            ?>
          <form action="categories.php" method="GET">
           <?php

                if (isset($_GET['add'])) {
                  $category_name = $_GET['category_name'];
                  $add = "INSERT INTO product_categories (category_name) VALUES ('$category_name')";
                  $result = mysqli_query($connect,$add);

                 

           ?>
                
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                                                    <strong>Alert!</strong> Category Added Successfully!!!
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                              <?php } ?>


          <div class="form-group mt-3">
            <label>Category Name</label>
            <input type="text" name="category_name" class="form-control">
         </div>
          <button type="submit" class="btn btn-primary offset-lg-4  offset-sm-5">Submit</button>
      </form>
      <?php } ?>
         
      
			<!-- <form action="category-data.php" method="POST">
			    <div class="form-group mt-3">
				    <label>Category Name</label>
				    <input type="text" name="category" class="form-control">
			   </div>
	  			<button type="submit" class="btn btn-primary offset-lg-4  offset-sm-5">Submit</button>
			</form> -->
		</div>
		<div class="col-lg-8" style="background-color:orange;">
			<h5 class="mt-3">All Medicine Categories</h5>
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php

      if (mysqli_num_rows($result)>0) {
       while ($row = mysqli_fetch_assoc($result))
        {


         ?>
    <tr>
      <th scope="row"><?php echo $row['category_id'];?></th>
      <td><?php echo $row['category_name'];?></td>
      <td><a href="categories.php?edit=<?php echo $row['category_id'];?>" class="btn btn-primary btn-xs">Edit</a></td>
      <td><a href="categories.php?delete=<?php echo $row['category_id']; ?>" class="btn btn-primary btn-xs">Delete</a></td>
    </tr>
  <?php 
  }
  ?>
<?php
}
else{
  echo "error";
}
?>
      
  </tbody>
</table>
		</div>
	</div>
  
 <!--  // if (isset($_GET['delete'])) {
  //   $delete = $_GET['delete'];
  //   $query="SELECT * FROM product_categories WHERE category_id = '$delete'";
  //   $result = mysqli_query($connect,$query);
  //   return redirect('categories.php');
     
  // } -->
  <?php
  if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete = "DELETE FROM product_categories WHERE category_id = $delete_id";
    $result = mysqli_query($connect,$delete);

      

  }
  ?>
</div>
