<?php 
session_start();

if(isset($_POST['submit']))
{
	include_once 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$select_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$result_admin = $conn->query($select_admin);
	$row_admin = $result_admin->fetch_assoc();
	$img = $row_admin['image'];
	$count = $result_admin-> num_rows;
	if($count > 0){
		$_SESSION['username'] = $username;
		$_SESSION['img'] = $img;

		header("Location:../index.php");
	}
	else
	{
		header("Location:../login.php");
	}
	


}

?>