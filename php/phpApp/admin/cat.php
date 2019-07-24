<?php include("header.php"); ?>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
		<table class = "table table-bordered">
			<caption>
				<a href = "newcat.php">Add new</a>
				<span style = "float:right;">Available Categories</span>
			</caption>
			<tr class = "active">
				<th>Id</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
			<?php
			include("dbconfig.php");
			$sql = "select * from category order by catid desc";
			$res = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_object($res))
			{
				echo"<tr>";
				echo"<td> $row->catid</td>";
				echo"<td> $row->catname</td>";
				echo"<td>--Delete--</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</div>

<?php include("footer.php"); ?>