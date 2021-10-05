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
	<th>URL</th>
	<th>IPADDRESS</th>
	<th>Visit Time</th>
	</tr>
	<?php
	include("dbconfig.php");
	$sql ="select * from uservist order by id desc";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
		echo "<tr>";
		echo "<td> $row->pagename </td>";
		echo "<td> $row->ip  </td>";
		echo "<td> $row->visittime  </td>";
		echo "</tr>";
	}
	?>
	</table>
	</div>
	</div>