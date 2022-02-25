<?php 
	if(isset($_POST['submit'])){
	include_once 'connection.php';
    $name = $_POST['name'];
	$order_number = $_POST['order_number'];
	$quantity = $_POST['quantity'];
	$admin_id  = $_POST['admin_id'];
	$cus_id   = $_POST['cus_id'];
	$payment_id   = $_POST['payment_id'];
	$products_id   = $_POST['products_id'];

	
	

	$insert_product = "INSERT INTO orders(name,orderNumber,quantity,ID_admin, id_customer,payment_id,product_id)VALUES('$name' ,'$order_number' , '$quantity', $admin_id,$cus_id ,$payment_id,$products_id)";
	$conn->query($insert_product);
	header("Location:../order.php");
}

?>