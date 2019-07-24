<?php include("header.php"); ?>
<br><br>
<div class = "row">
	<div class = "col-md-3"></div>
	<div class = "col-md-6">
	   <form action="saveproduct.php" method="POST" enctype="multipart/form-data">
	     <table class="table table-bordered">
		 <tr>
		     <th>Name</th>
			 <td><input type="text" name="pname" class="form-control"></td>
		 </tr>
		 
		 <tr>
		     <th>Price</th>
			 <td><input type="text" name="price" class="form-control"></td>
		 </tr>
		 
		 <tr>
		     <th>Quantity</th>
			 <td><input type="text" name="qty" class="form-control"></td>
		 </tr>
		 
		 <tr>
		     <th>Details</th>
			 <td><textarea  name="details" class="form-control"></textarea> </td>
		 </tr>
		 
		 <tr>
		     <th>Category</th>
			 <td>
			     <select name="cat" class="form-control">
				 <option value="0"> Choose</option>
				 <?php
				 include("dbconfig.php");
				 $sql="select * from category";
				 $res = mysqli_query($conn, $sql);
				 while($row = mysqli_fetch_object($res))
				 {
					 echo "<option value='$row->catid'> $row->catname </option>";
				 }
				 ?>
				 <option value="1"> Mobile</option>
				 </select>
			</tr>	 
				 <tr>
		     <th>Photo</th>
			 <td><input type="file" name="photo" class="form-control"></td>
		 </tr>
		 
		 <tr>
		     <th colspan="2" class="text-center">
			   <button type="submit" class="btn btn-primary">
			   Upload Product</button>
			 
			 </th>
			 
		 </tr>
			 </td>
		 </tr>
	     </table>
	   </form>
	
	</div>
	<?php
	include("footer.php");
	?>