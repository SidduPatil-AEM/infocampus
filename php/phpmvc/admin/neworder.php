<?php include("header.php"); ?>
<br><br>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
				<a href = "neworder.php">Category List</a> 
				<span style = "float:right;">New Orders</span>
				<br><br>

				<form action = "saveorder.php" method = "POST">
					<div class = "form-group">
						<label>Product Id</label>
						<input type="text" name="productid" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Quantity</label>
						<input type="text" name="qty" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Price</label>
						<input type="text" name="price" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Total Price</label>
						<input type="text" name="totalprice" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Status</label>
						<input type="text" name="status" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Order Date </label>
						<input type="text" name="orderdate" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Delivery Date</label>
						<input type="text" name="deliverydate" class = "form-control">
					</div>
					
					
					

					<div class = "text-center">
						<button class = "btn btn-primary">Save Order</button>
					</div>
				</form>
			
			
	</div>
	<div class = "col-md-3"></div>
</div>

<?php include("footer.php"); ?>

