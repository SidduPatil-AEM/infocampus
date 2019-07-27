<?php
  include("header.php"); ?>
  
  <br>
    <div class="row">
    <div class="col-md-12">
	<table class="table table-bordered">
	<caption class="text-center">
	<a href="newproduct.php">+ new Product</a> ||
	product list
	</caption>
	
	<tr>
	<th>Name</th>
	<th>Price</th>
	<th>Qty</th>
	<th>Category</th>
	<th>Details</th>
	<th>Photo</th>
	<th>Action</th>
	</tr>
	<?php
	include("dbconfig.php");
	$sql ="select product.*, category.*
      	from product,category
         where category.catid = product.cat
		 order by id desc";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
		echo "<tr>";
		echo "<td> $row->name </td>";
		echo "<td> $row->price </td>";
		echo "<td> $row->qty </td>";
		echo "<td> $row->catname </td>";
		echo "<td> $row->details </td>";
		echo "<td> <img src='image/$row->photo' height='50' width='50'> $row->photo </td>";
		echo "<td> -------- </td>";
		
		echo "</tr>";
		
	}
	?>
	</table>
	</div>
	</div>