<html>
<head>
	<link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body class="bg-danger">
<div class="container">	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 bg-info">
		<form action="check.php" method="post">
			<h3 class="text-center">Login</h3>
				<p class="form-group">
				<label>	Email : </label><input type="text" name="email" class="form-control">
				</p>
				<p class="form-group">
				<label>	Password : </label><input type="password" name="password" class="form-control">
				</p>
				<p class="form-group">
					<button type="submit" class="btn btn-success">Login</button>
				</p>
				<hr>

				<p class="form-group"><a href="signup.php" class="btn btn-info">Register</a></p>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>	
</body>
</html>