<?php
include ('dbconfig.php');
?>
<html>
<head>
<link rel="stylesheet" href="dist/css/bootstrap.css">
</head>
<body class="bg-danger">
	<div class="container">
			<table align="center" class="table" cellpadding="0">
				<caption>
					<h3>Brand List</h3>
				</caption>
				<tr>
					<th>ID</th>
					<th>Brand Name</th>
					<th>Delete Brand</th>
				</tr>
    <?php
    $sql = "select * from brand_list order by id asc";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_object($result)) {
        echo "<tr>";
        echo "<td scope='row'> $row->id </td>";
        echo "<td> $row->name </td>";
        echo "<td><button type='submit' class='btn btn-info'>Delete</button></td>";
    }
    ?>
</table>
		</div>
</body>
</html>
