<?php
session_start();

require_once("connect.php");

if(isset($_POST['name']))
{
  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bd=$_POST['birthday'];
$password=$_POST['password'];
$sql="INSERT INTO `customers`( `name`,  `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$password')";
$conn->query($sql);
if(mysqli_affected_rows($conn)==1)
{
    $_SESSION['name']=$name;

    header('Location:../main.php');
   
}
else
{
    header("Location:../form.php");

}

}