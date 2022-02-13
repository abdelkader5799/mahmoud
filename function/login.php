<?php 
session_start();
include_once 'connect.php';

if(isset($_POST['email']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$select_admin = "SELECT * FROM `customers` WHERE email = '$email' AND password = '$password'";
	$result_admin = $conn->query($select_admin);
	$row_admin = $result_admin->fetch_assoc();
	
	$count = $result_admin-> num_rows;
	if($count ==1)
	{
		$_SESSION['email']=$email;
		header('Location:../main.php');

		

	}
	else
	{
		header("Location:../login.php");

	}
	


}

?>