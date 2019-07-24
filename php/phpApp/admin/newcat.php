<?php include("header.php"); ?>
<br><br>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
				<a href = "newcat.php">Category List</a> 
				<span style = "float:right;">New Categories</span>
				<br><br>

				<form action = "savecat.php" method = "POST">
					<div class = "form-group">
						<label>New Category Name</label>
						<input type="text" name="catname" class = "form-control">
					</div>

					<div class = "text-center">
						<button class = "btn btn-primary">Save Category</button>
					</div>
				</form>
			
			
	</div>
	<div class = "col-md-3"></div>
</div>

<?php include("footer.php"); ?>