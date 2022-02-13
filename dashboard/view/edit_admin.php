<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom admin WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

				<form action="function/update_admin.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input class="form-control" type="text" name="username" placeholder="Enter username" value="<?php echo $array['username'];?>" ><br>
					<input class="form-control" type="password" name="password" placeholder="Enter Password" value="<?php echo $array['password'];?>"><br>
					<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
					
					<input type="file" name="image"><br>
					<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>