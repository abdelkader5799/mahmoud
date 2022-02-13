<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$image_name = $_FILES['image']['name']; 
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");	

	if(!empty($image_name)){
		$update_image = "UPDATE admin SET image = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}

	$update_admin = "UPDATE admin SET username = '$username' , password = '$password' WHERE id = $id";
	$conn->query($update_admin);
	

	header("Location:../index.php");
}

?>