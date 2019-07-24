<?php include("header.php"); ?>
<br><br>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
				<a href = "newuser.php">User List</a> 
				<span style = "float:right;">New User</span>
				<br><br>

				<form action = "saveuser.php" method = "POST">
					<div class = "form-group">
						<label>Name</label>
						<input type="text" name="name" class = "form-control">
					</div>
					<div class = "form-group">
						<label> Email</label>
						<input type="text" name=" email" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Password</label>
						<input type="text" name="password" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Pincode</label>
						<input type="text" name="pincode" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Address</label>
						<input type="text" name="address" class = "form-control">
					</div>
					
					
					
					

					<div class = "text-center">
						<button class = "btn btn-primary">Save User</button>
					</div>
				</form>
			
			
	</div>
	<div class = "col-md-3"></div>
</div>

<?php include("footer.php"); ?>

