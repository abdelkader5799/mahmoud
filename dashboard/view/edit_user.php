<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom customers WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="function/update_user.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="name"  value="<?php echo $array['name'];?>" ><br>

		<input class="form-control" type="text" name="bd"  value="<?php echo $array['bd'];?>" ><br>

		<input class="form-control" type="email" name="email"  value="<?php echo $array['email'];?>" ><br>

		<input class="form-control" type="password" name="password"  value="<?php echo $array['password'];?>" ><br>


		<input class="form-control" type="text" name="phone"  value="<?php echo $array['phone'];?>" ><br>


		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
		
		<input type="file" name="image"><br>
		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>