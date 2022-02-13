<form action="function/insert_product.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" placeholder="Enter Name"><br>

	<input class="form-control" type="text" name="price" placeholder="Enter Price"><br>

	<input class="form-control" type="text" name="discount" placeholder="Enter Discount"><br>

	<textarea class="form-control" name="description">Description</textarea><br>
	<label>Choose Category</label>

	
		
	
	<label>Upload Image</label>
	<input type="file" name="image"><br>
	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
</form>