	<?PHP 
		include("myheader.php");
	?>
	<div class="jumbotron">
	<form action="uploaddata.php" method="POST" enctype="multipart/form-data">
			<p>
				Choose any .csv file
				<input type="file" name="userfile">
				<br>
				<button type="submit" class="btn btn-success">Upload Xl</button>
			</p>
		</form>
	</div>
	<?PHP 
		include("footer.php");
	?>