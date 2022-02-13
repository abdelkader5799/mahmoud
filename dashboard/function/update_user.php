<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$firstname = $_POST['name'];
	$bd = $_POST['bd'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");

	if(!empty($image_name)){
		$update_image = "UPDATE customers SET image = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}

	$update_user = "UPDATE customers SET name = '$firstname' , bd = '$bd' ,password = '$password' , email = '$email' ,phone = '$phone' WHERE id = $id";
	$conn->query($update_user);
	

	header("Location:../users.php");
}

?>