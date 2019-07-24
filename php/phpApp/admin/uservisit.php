<?php include("header.php"); ?>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
		<table class = "table table-bordered">
			<caption>
				<a href = "newvisit.php">New Visit</a>
				<span style = "float:right;">New USer Visit</span>
			</caption>
			<tr class = "active">
				<th>Id</th>
				<th>IP</th>
				<th>datetime</th>
			</tr>
			<?php
			include("dbconfig.php");
			$sql = "select * from uservisit order by id desc";
			$res = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_object($res))
			{
				echo"<tr>";
				echo"<td> $row->id</td>";
				echo"<td> $row->ip</td>";
				echo"<td> $row->datetime</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</div>

<?php include("footer.php"); ?>

