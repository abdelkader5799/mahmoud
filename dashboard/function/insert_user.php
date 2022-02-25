<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$birthday = $_POST['bd'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	

	$insert_users = "INSERT INTO `customers`( `name`, `email`, `phone`, `password`, `image`) VALUES ('$name','$email','$phone','$password','$image_name')";
	$conn->query($insert_users);
	header("Location:../users.php");
}

?>