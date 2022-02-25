<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom payment WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				
                     
		<form action="function/update_payment.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="payment_type" placeholder="Enter payment" value="<?php echo $array['payment_type'];?>"><br>

                     
		<input type="submit" class="btn btn-primary" name="submit" value="Edit">


				</form>