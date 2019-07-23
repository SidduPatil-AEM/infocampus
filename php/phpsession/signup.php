<html>
<head>
	<link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
	<body class="bg-danger">
	<div class="container">	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 bg-info">
			<form action="saveuser.php" method="post">
				<p class="form-group"><label>Name : </label> <input type="text" name="fname" class="form-control"></p>
				<p class="form-group"><label>Mobile No : </label><input type="text" name="mobile" class="form-control"></p>
				<p class="form-group"><label>City : </label><input type="text" name="city" class="form-control"></p>
				<p class="form-group"><label>Age : </label><input type="text" name="age" class="form-control"></p>
				
				<p class="form-group"><label>E-mail : </label><input type="text" name="email" class="form-control"></p>
				<p class="form-group"><label>Password : </label><input type="password" name="password" class="form-control"></p>
				<p class="form-group"><button type="submit" class="btn btn-success" class="form-control">Login</button></p>
				<hr>
				<a href="signup.php">Register</a>			
			</form>
		</div>
		<div class="col-md-4"></div>		
	</body>
</html>