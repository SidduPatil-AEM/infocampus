<?php include("header.php"); ?>
<br><br>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
				<a href = "newvisit.php"></a> 
				<span style = "float:right;">New Visit</span>
				<br><br>

				<form action = "savevisit.php" method = "POST">
					<div class = "form-group">
						<label>IP</label>
						<input type="text" name="ip" class = "form-control">
					</div>
					<div class = "form-group">
						<label>Date Time</label>
						<input type="text" name="datetime" class = "form-control">
					</div>

					<div class = "text-center">
						<button class = "btn btn-primary">Save Visit</button>
					</div>
				</form>
			
			
	</div>
	<div class = "col-md-3"></div>
</div>

<?php include("footer.php"); ?>