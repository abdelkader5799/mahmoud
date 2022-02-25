
<?php
include_once 'connection.php';

$sql = "select * from admin";
$dep_op  = mysqli_query($conn,$sql);



?>





<form action="function/insert_product.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" placeholder="Enter Name"><br>

	<input class="form-control" type="text" name="price" placeholder="Enter Price"><br>

	<input class="form-control" type="text" name="discount" placeholder="Enter Discount"><br>

	<textarea class="form-control" name="description">Description</textarea><br>
           
	 
	<div class="form-group">
                <select class="form-control"  name="admin_id" >
                 
                <?php 
                   while($dep_data = mysqli_fetch_assoc($dep_op)){
                ?>

                <option value="<?php echo $dep_data['id'];?>"><?php echo $dep_data['username'];?></option>

                <?php }  ?>

                </select>    
            </div>


	
	<label>Upload Image</label>
	<input type="file" name="image"><br>
	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
</form>
