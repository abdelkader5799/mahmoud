


<a href="?do=add" class="btn btn-info">Add New orders</a>
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
      <th scope="col">product name</th>
      <th scope="col">order_number</th>
      <th scope="col">quantity</th>
      <th scope="col">customer name</th>
      <th scope="col">payment_type</th>
      <th scope="col">admin name</th>

      <th scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
   

<?php 
$index = 1;
$select_products =  "SELECT orders.* , admin.username,payment.payment_type,customers.name as customerName,products.name as productName from orders  join admin on orders.ID_admin = admin.id
 join payment on orders.payment_id= payment.id
  join products on orders.product_id=products.id 
  join customers on orders.id_customer=customers.id";
$result_products = $conn->query($select_products);
foreach ($result_products as $key) {
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['productName']; ?></td>
      <td><?php echo $key['orderNumber']; ?></td>
      <td><?php echo $key['quantity']; ?></td>
      <td><?php echo $key['customerName']; ?></td>
      <td><?php echo $key['payment_type']; ?></td>
       <td><?php echo $key['username']; ?></td>


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
        Are You Sure To Delete orders ( <span style="color: red;"><?php echo $key['name']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_order.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
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