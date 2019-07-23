<?php 
	include("header.php");
?>
<h1 align="center">Contact Us</h1>
<div class="container">
	<form action="savecontact.php" method="POST">
			<div class="row">
				<div class="col-md-3">
					
				</div><!-- 3 ends here -->
				<div class="col-md-6 bg-success">
					<div class="row form-group">
						 <div class="col-md-3">Name*</div>
						 
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
						 <div class="col-md-3">Email Id*</div>
						 
						 <div class="col-md-9">
							<input type="text" name="email" class="form-control" required/>
						 </div>
					</div><!-- row 3 end here -->

					<div class="row form-group">
						 <div class="col-md-3">Message</div>
						 
						 <div class="col-md-9">
							<textarea class="form-control" name="message"></textarea>
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