<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$discription = $_POST['discription'];
	$admin_id = $_POST['admin_id'];

	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");

	if(!empty($image_name)){
		$update_image = "UPDATE products SET img = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}

	$update_product = "UPDATE products SET name = '$name' , price = '$price' , discount = '$discount' , description = '$discription' ,admin_id=$admin_id WHERE id = $id";
	$conn->query($update_product);
	

	header("Location:../products.php");
}

?>