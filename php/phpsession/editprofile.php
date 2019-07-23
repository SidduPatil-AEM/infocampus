<?php 
    include("header.php");
    $userid=$_SESSION['id'];//taking the userid session of current user
    $sql = "select * from user where id='$userid'";
    $res = mysqli_query($conn, $sql);
    $user = mysqli_fetch_object($res);// to fetch single user data
?>
	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-6">
			<form action="updateuser.php" method="post">
			<table class="table table-bordered table-hover">
				<caption class="text-center">Edit Profile</caption>
				<tr>
					<th scope="row">Fullname</th>
					<td><input type="text" name="fname" value="<?php echo $user->fullname ?>"></td>
				</tr>
				<tr>
					<th scope="row">Email</th>
					<td><input type="text" name="email" value="<?php echo $user->email ?>"></td>
				</tr>
				<tr>
					<th scope="row">Password</th>
					<td><input type="text" name="pass" value="<?php echo $user->password ?>"></td>
				</tr>
				<tr>
					<th scope="row">Mobile</th>
					<td><input type="text" name="mobile" value="<?php echo $user->mobile ?>"></td>
				</tr>
				<tr>
					<th scope="row">City</th>
					<td><input type="text" name="city" value="<?php echo $user->city ?>"></td>
				</tr>
				<tr>
					<th scope="row">Age</th>
					<td><input type="text" name="age" value="<?php echo $user->age ?>"></td>
				</tr>
				<tr>
					<td colspan="2">
						<button class="btn btn-primary">Update Profile</button>
					</td>
				</tr>				
			</table>
			</form>
		</div>
		<div class="col-md-3">

		</div>
	<?php
		include("footer.php")
	?>