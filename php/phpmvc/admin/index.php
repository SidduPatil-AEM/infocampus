<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" href = "dist/css/bootstrap.css">
</head>
<body>
	<div class = "container">
		<div class = "row">
			<div class = "col-md-4"></div>
			<div class = "col-md-4">
				<h3 class = "text-center text-success">Login</h3>
				<?php
				session_start();
				if(isset($_SESSION['userid']))
				{
					
					header("Location:home.php");
				}

				if(isset($_SESSION['error']))
				{
					echo "<p class = 'alert alert-danger'>" . $_SESSION['error']."</p>";
					unset($_SESSION['error']);
				}
				?>
				<form action = "auth.php" method = "POST">
					<div class = "form-group">
						<label>UserId</label>
						<input type = "text" name = "userid" class = "form-control">
					</div>

					<div class = "form-group">
						<label>Password</label>
						<input type = "text" name = "pass" class = "form-control">
					</div>

					<div class = "text-center">
						<button class = "btn btn-primary">Login</button>
					</div>

				</form>
			</div>
			<div class = "col-md-4"></div>
		</div>
	</div>

</body>
</html>