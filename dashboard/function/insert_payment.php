<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$username = $_POST['payment_type'];
	
	

	$insert_Admin = "INSERT INTO payment(payment_type)VALUES('$username')";
	$conn->query($insert_Admin);
	header("Location:../payment.php");
}

?>