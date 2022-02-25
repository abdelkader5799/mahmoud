<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$description = $_POST['description'];
	 $admin_id   = $_POST['admin_id'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	

	$insert_product = "INSERT INTO products(name,price,discount,description,img,admin_id)VALUES('$name' ,'$price' , '$discount','$description','$image_name', $admin_id)";
	$conn->query($insert_product);
	header("Location:../products.php");
}

?>