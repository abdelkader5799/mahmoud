
<?php
include_once 'connection.php';

$sql = "select * from admin";
$dep_op  = mysqli_query($conn,$sql);
##################################

$sql = "select * from payment";
$payment_op  = mysqli_query($conn,$sql);
###################################

$sql = "select * from customers";
$cus_op  = mysqli_query($conn,$sql);
##################################

$sql = "select * from  products";
$products_op  = mysqli_query($conn,$sql);


?>





<form action="function/insert_order.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" placeholder="Enter order Name "><br>

	<input class="form-control" type="text" name="quantity" placeholder="Enter quantity"><br>

	<input class="form-control" type="text" name="order_number" placeholder="Enter order Number"><br>
           
	 
	<div class="form-group">
   <label for="exampleInputPassword">New admin name</label>

                <select class="form-control"  name="admin_id" >
                 
                <?php 
                   while($dep_data = mysqli_fetch_assoc($dep_op)){
                ?>

                <option value="<?php echo $dep_data['id'];?>"><?php echo $dep_data['username'];?></option>

                <?php }  ?>

                </select>    
            </div>
     <div class="form-group">
     <label for="exampleInputPassword">New payment</label>

                <select class="form-control"  name="payment_id" >
                 
                <?php 
                   while($dep_data = mysqli_fetch_assoc($payment_op)){
                ?>

                <option value="<?php echo $dep_data['id'];?>"><?php echo $dep_data['payment_type'];?></option>

                <?php }  ?>

                </select>    
            </div>
            <label for="exampleInputPassword">New customer name</label>

            <div class="form-group">
                <select class="form-control"  name="cus_id" >
                 
                <?php 
                   while($dep_data = mysqli_fetch_assoc($cus_op)){
                ?>

                <option value="<?php echo $dep_data['id'];?>"><?php echo $dep_data['name'];?></option>

                <?php }  ?>

                </select>    
            </div>
            <div class="form-group">
            <label for="exampleInputPassword">New product name</label>

                <select class="form-control"  name="products_id" >
                 
                <?php 
                   while($dep_data = mysqli_fetch_assoc($products_op)){
                ?>

                <option value="<?php echo $dep_data['id'];?>"><?php echo $dep_data['name'];?></option>

                <?php }  ?>

                </select>    
            </div>


   
	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
</form>
