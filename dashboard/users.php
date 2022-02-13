<?php
session_start();

{

 include_once 'includes/header.php';
 include_once 'includes/nav.php';
 include_once 'includes/sidebar.php';
 ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->

		
				<!-- <h1 class="page-header">Users</h1> -->

<?php
if(!$_GET['do']){
	include 'view/view_users.php';

}elseif($_GET['do'] == "add"){
	include 'view/add_user.php';

}elseif($_GET['do'] == "edit"){
	include 'view/edit_user.php';
} 
?>				



			</div>
		</div><!--/.row-->
<?php include_once 'includes/footer.php'; 
}

?>

		
