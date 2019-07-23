<?php 
    include('header.php');
    $userid = $_SESSION['id'];
    $sql = "select * from user where id='$userid'";
    $res = mysqli_query($conn, $sql);
    $user = mysqli_fetch_object($res);
?>
	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-6">
			<table class="table table-bordered table-hover">
				<caption class="text-center">Welcome <?php echo $_SESSION['name'] ?></caption>
				<tr>
					<th scope="row">Mobile</th>
					<td><?php echo $user->fullname ?></td>
				</tr>
				<tr>
					<th scope="row">City</th>
					<td><?php echo $user->city ?></td>
				</tr>
				<tr>
					<th scope="row">Age</th>
					<td><?php echo $user->age ?></td>
				</tr>				
			</table>
		</div>
		<div class="col-md-3">

		</div>
	<?php
		include("footer.php")
	?>