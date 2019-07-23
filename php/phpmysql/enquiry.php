<?php 
	include("header.php");
?>
<h1 align="center">Enquiry Page</h1>
<div class="container">
	<form action="saveenquiry.php" method="POST">
			<div class="row">
				<div class="col-md-3">
					
				</div><!-- 3 ends here -->
				<div class="col-md-6 bg-success">
					<div class="row form-group">
						 <div class="col-md-3">Full Name*</div>
						 
						 <div class="col-md-9">
							<input type="text" name="fname" class="form-control" required/>
						 </div>
					</div><!-- row 1 end here -->
					
					<div class="row form-group">
						 <div class="col-md-3">Mobile No*</div>
						 
						 <div class="col-md-9">
							<input type="number" name="mobile" class="form-control" required/>
						 </div>
					</div><!-- row 2 end here -->
					
					<div class="row form-group">
						 <div class="col-md-3">City**</div>
						 
						 <div class="col-md-9">
						 	<select name="city" class="form-control">
							 	<option>Choose</option>
								 <option>Bangalore</option>
								 <option>Mumbai</option>
								 <option>Pune</option>
							 </select>

						 </div>
					</div><!-- row 3 end here -->

					<div class="row form-group">
						 <div class="col-md-3">Address</div>
						 
						 <div class="col-md-9">
						 <input type="text" name="address" class="form-control" required/>
						 </div>
					</div><!-- row 4 end here -->


					<div class="text-center">
						<button type="submit" class="btn btn-success">Save</button>
						<button type="reset" class="btn btn-warning">Reset</button>
					</div>	
	</form>
</div>
<?php 
	include("footer.php");
?>