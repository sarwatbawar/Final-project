<?php 
include 'connection.php';
include 'admin-header.php';
?>
       
            <div class="container mt-5">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="d-md-flex align-items-center">
                                    <div class="col-md-12 mb-3">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <h4 class="card-title mb-4">All Products</h4>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <a href="add-product.php" class="btn btn-primary">Add New Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="myTable" class="table v-middle">
                                        <thead>
                                            <tr class="bg-dark text-light">
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Product Name</th>
                                                <th class="border-top-0">Category</th>
                                                <th class="border-top-0">Price</th>
                                                <th class="border-top-0">Quanitity</th>
                                                <th class="border-top-0">Picture</th>
                                                <th class="border-top-0">Current Status</th>
                                                <th class="border-top-0">Change Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $k = 1;
                                            $fetch_data = "SELECT * FROM product";
                                            $result = mysqli_query($connect,$fetch_data);
                                            $count = mysqli_num_rows($result);

                                            while ($row = mysqli_fetch_array($result)) {
                                                
                                                ?>
                                                <tr>
                                                    <td><?php echo $k; ?></td>
                                                    <td><strong><?php echo $row['product_name']; ?></strong>
                                                        <p><a href="#?edit=<?php echo $row['product_id']; ?>">Edit</a> / <a onClick="javascript: return confirm('Are you sure you want to Delete This Product?'); " href="#?delete=<?php echo $row['product_id']; ?>">Delete</a></p></td>
                                                    <td>

                                                        <?php
                                                        $query = "SELECT product_categories.category_id, product_categories.category_name, product.category_id FROM product INNER JOIN product_categories ON product_categories.category_id = product.category_id WHERE product_categories.category_id = '" . $row['category_id'] . "'";
                                                        $fetch_cat_name = mysqli_query($connect,$query);
                                                        $cats = mysqli_fetch_array($fetch_cat_name);
                                                        echo $cats['category_name'];;
                                                        ?>
                                                        
                                                    </td>
                                                    <td><?php echo $row['product_name']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                        <?php
                                                            if ($row['quantity'] <= 10) {
                                                                echo "<td style='background:#a50c17!important;color:white;'>";
                                                            } else {
                                                                echo "<td>";
                                                            }
                                                            echo $row['quantity'];
                                                        ?>
                                                        
                                                    </td>
                                                    <td><img src="./images/<?php echo $row['product_image']; ?>" style="width: 100px;height: 100px;"></td>
                                                    <td>
                                                        <?php

                                                        if($row['status'] == "published") {
                                                            ?>
                                                            <label class='label label-success'><?php echo $row['status']; ?></label>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <label class='label label-danger'><?php echo $row['status']; ?></label>

                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                    </td>
                                                    <td>
                                                        <?php

                                                        if($row['status'] == "published") {
                                                            ?>
                                                            <a href='product.php?draft=<?php echo $row['product_id']; ?>' class='btn btn-danger btn-xs'>Draft</a>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <a href='product.php?publish=<?php echo $row['product_id']; ?>' class='btn btn-success btn-xs'>Publish</a>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                    </td>
                                                </tr>
                                                <?php
                                                $k++;
                                            }
                                                ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="bg-dark text-light">
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Product Name</th>
                                                <th class="border-top-0">Category</th>
                                                <th class="border-top-0">Price</th>
                                                <th class="border-top-0">Quanitity</th>
    
                                                <th class="border-top-0">Picture</th>
                                                <th class="border-top-0">Current Status</th>
                                                <th class="border-top-0">Change Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
<?php

    if (isset($_GET['publish'])) {
        
        $product_id = $_GET['publish'];
        $update = "UPDATE product SET status = 'published' WHERE product_id = '$product_id'";
        $publish = mysqli_connect($connect,$update);

        return redirect("product.php");

    }

    if (isset($_GET['draft'])) {
        
        $product_id = $_GET['draft'];
        $draft_query = "UPDATE product SET status = 'draft' WHERE product_id = '$product_id'";
        $draft = mysqli_connect($connect,$draft_query);

      	

    }

    if (isset($_GET['delete'])) {
        
        $product_id = $_GET['delete'];
        $delete_query = "DELETE FROM product WHERE product_id = '$product_id'";
        $delete = mysqli_connect($connect,$delete_query);
       

    }


?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       


  