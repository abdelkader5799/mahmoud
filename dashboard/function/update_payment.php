<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$username = $_POST['payment_type'];
		

	
	$update_admin = "UPDATE payment SET payment_type = '$username' WHERE id = $id";
	$conn->query($update_admin);
	

	header("Location:../payment.php");
}

?>