<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_admin = "DELETE FROM payment WHERE id = $id";
$conn->query($delete_admin);
header("Location:../payment.php"); 

?>