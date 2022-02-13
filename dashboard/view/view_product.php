<a href="?do=add" class="btn btn-info">Add New Product</a>
<br><br>
<form method="GET" enctype="multipart/form-data">
<input type="text" name="search" placeholder="enter name">
<input type="submit" value="search">
</form>

				<br><br>
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
      
      <th scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
<?php 
$index = 1;
$select_products = "SELECT * FROM products";
if(isset($_GET['search']))
{
  $search=$_GET['search'];
  $select_products.= " where products.name LIKE '%$search%'"; 

}
$result_products = $conn->query($select_products);
foreach ($result_products as $key) {
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['price']; ?></td>
      <td><?php echo $key['discount']; ?></td>
      <td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['img']; ?>"></td>
      <td><?php echo $key['description']; ?></td>
      

      <td>
      	<a href="?do=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
      	<!--- Delete  modal --->

      	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key['id'];?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete Product ( <span style="color: red;"><?php echo $key['name']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_product.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>

      </td>    
    </tr>
<?php 	
}
?>  	


  </tbody>
</table>