<html>
	<body>
		<center>
			<h2>File / photo upload and Listing Example</h2>
			<form action = "upload.php" method = "POST" enctype = "multipart/form-data"> <!-file upload -->
				<table align="center" cellpadding="8">
					<tr>
						<th>Select Photo</th>
						<td><input type = "file" name = "myfile"></td>
					</tr>

					<tr>
						<th colspan = "2">
							<button type = "submit">Upload file</button>
						</th>
					</tr>
					
				</table>
				
			</form>
			<style>
				.myphoto{
					height:100px;
					width:23%;
					border-radius:10px;
					margin:1%;
				}
			</style>
			<h3>Available photo</h3>
			<?php
			$conn = mysqli_connect("localhost","root","","fileupload");
			$sql = "select * from userphoto order by id desc";
			$res = mysqli_query($conn,$sql);
			while($photo = mysqli_fetch_object($res))
			{
				echo "<img src = 'photo/$photo->name' class='myphoto'>";
			}
			?>
		</center>
	</body>
</html>