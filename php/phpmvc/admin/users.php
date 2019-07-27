<?php
  include("header.php"); ?>
  
  <br>
    <div class="row">
    <div class="col-md-12">
	<table class="table table-bordered">
	<caption class="text-center">
		User list
	</caption>
	
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Message</th>
	</tr>
	<?php
	include("dbconfig.php");
	$sql ="select * from user order by id desc";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
		echo "<tr>";
		echo "<td> $row->name </td>";
		echo "<td> $row->email  </td>";
		echo "<td> $row->mobile  </td>";
		echo "<td> $row->message</td>";
		echo "</tr>";
		
	}
	?>
	</table>
	</div>
	</div>