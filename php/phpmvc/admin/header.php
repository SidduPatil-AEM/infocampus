<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "dist/css/bootstrap.css">
</head>
<body>
	<br>
	<div class = "container">
		<?php
				session_start();
				if(!isset($_SESSION['userid']))
				{
					$_SESSION['error'] = "Invalid Access !";
					header("Location:index.php");
				}
		?>

		<div class = "row">
			<div class = "col-md-12 text-center">
				<div class = "btn-group">
					<a href = "home.php" class = "btn btn-success">Dashboard</a>
					<a href = "cat.php" class = "btn btn-primary">Category</a>
					<a href = "product.php" class = "btn btn-primary">Product</a>
					<a href = "myorder.php" class = "btn btn-primary">Orders</a>
					<a href = "users.php" class = "btn btn-primary">User List</a>
					<a href = "uservisit.php" class = "btn btn-primary">User Visit</a>
					<a href = "logout.php" class = "btn btn-danger">
						Welcome  <?php echo $_SESSION['userid']?> - Logout
					</a>
			</div>
		</div><!--row- end-->