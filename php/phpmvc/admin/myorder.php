<?php
  include("header.php"); ?>
  
  <br>
    <div class="row">
    <div class="col-md-12">
	<table class="table table-bordered">
	<caption class="text-center">
	<a href="neworder.php">+ New Order</a> ||
	Order List
	</caption>
			</caption>
			<tr class = "active">
				<th>Order Id</th>
				<th>Product Id</th>
				<th>Quantity </th>
				<th>Price </th>
				<th>Total Price </th>
				<th>Status  </th>
				<th>Order Date </th>
				<th>Delivery Date</th>
				<th>Delete</th>
				
			</tr>
			<?php
	include("dbconfig.php");
	$sql ="select * from myorder order by orderid desc";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
				echo"<tr>";
				echo"<td> $row->orderid</td>";
				echo"<td> $row->productid</td>";
				echo"<td> $row->qty</td>";
				echo"<td> $row->price</td>";
				echo"<td> $row->totalprice</td>";
				echo"<td> $row->status </td>";
				echo"<td> $row->orderdate</td>";
				echo"<td> $row->deliverydate</td>";
				echo"<td>--Delete--</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</div>

<?php include("footer.php"); ?>

 