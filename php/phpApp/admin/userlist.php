<?php
  include("header.php"); ?>
  
  <br>
    <div class="row">
    <div class="col-md-12">
	<table class="table table-bordered">
	<caption class="text-center">
	<a href="newuser.php">+ new User</a> ||
	User list
	</caption>
	
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Password  </th>
	<th>Mobile</th>
	<th>Pincode</th>
	<th>ASddress</th>
	<th>Action</th>
	</tr>
	<?php
	include("dbconfig.php");
	$sql ="select * from user order by uid desc";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
		echo "<tr>";
		echo "<td> $row->name </td>";
		echo "<td> $row->email  </td>";
		echo "<td> $row->password</td>";
		echo "<td> $row->mobile  </td>";
		echo "<td> $row->pincode</td>";
		echo "<td> $row->address</td>";
		echo "<td> -------- </td>";
		
		echo "</tr>";
		
	}
	?>
	</table>
	</div>
	</div>