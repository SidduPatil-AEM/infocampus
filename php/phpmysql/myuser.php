<?php 
	include("header.php");
?>
<h1 align="center">User Details</h1>
<div class="container">
	<form action="savemyuser.php" method="POST">
			<div class="row">
                <div class="col-md-3">
					
                </div><!-- 3 ends here -->

				<div class="col-md-6 bg-success">
					<div class="row form-group">
						 <div class="col-md-3">Name*</div>
						 
						 <div class="col-md-9">
							<input type="text" name="name" class="form-control" required/>
						 </div>
					</div><!-- row 1 end here -->

                    <div class="row form-group">
						 <div class="col-md-3">Username*</div>
						 
						 <div class="col-md-9">
							<input type="text" name="username" class="form-control" required/>
						 </div>
					</div><!-- row 2 end here -->

                    <div class="row form-group">
						 <div class="col-md-3">Password*</div>
						 
						 <div class="col-md-9">
							<input type="password" name="password" class="form-control" required/>
						 </div>
					</div><!-- row 3 end here -->

                    <div class="row form-group">
						 <div class="col-md-3">Re-type Password*</div>
						 
						 <div class="col-md-9">
							<input type="password" name="cpassword" class="form-control" required/>
						 </div>
					</div><!-- row 4 end here -->

                    <div class="row form-group">
						 <div class="col-md-3">Gender</div>
						 
						 <div class="col-md-9" class="radio">
                            <input type="radio" name="gender" value="male" class="form-check-input">Male
                            <input type="radio" name="gender" value="female" class="form-check-input">Female
                            <input type="radio" name="gender" value="other" class="form-check-input">Other					 
                        </div>
					</div><!-- row 5 end here -->

                    <div class="row form-group">
						 <div class="col-md-3">Programming Skills</div>
						 
						 <div class="col-md-9">
                            <input type="checkbox" name="skill[]" value="java" class="form-check-input">Java
                            <input type="checkbox" name="skill[]" value="android" class="form-check-input">Android
                            <input type="checkbox" name="skill[]" value="ruby" class="form-check-input">Ruby	
                            <input type="checkbox" name="skill[]" value="dotnet" class="form-check-input">.Net					 
                        </div>
					</div><!-- row 6 end here -->
					
					<div class="row form-group">
						 <div class="col-md-3">Contact No*</div>
						 
						 <div class="col-md-9">
							<input type="number" name="contactno" class="form-control" required/>
						 </div>
					</div><!-- row 7 end here -->
					
					<div class="row form-group">
						 <div class="col-md-3">Email Id*</div>
						 
						 <div class="col-md-9">
							<input type="text" name="email" class="form-control" required/>
						 </div>
					</div><!-- row 8 end here -->

                    <div class="row form-group">
						 <div class="col-md-3">College**</div>
						 
						 <div class="col-md-9">
						 	<select name="city" class="form-control">
							 	<option>Choose</option>
								 <option>SVIT/option>
								 <option>A</option>
								 <option>B</option>
							 </select>

						 </div>
					</div><!-- row 9 end here -->

					<div class="text-center">
						<button type="submit" class="btn btn-success">Save</button>
						<button type="reset" class="btn btn-warning">Reset</button>
					</div>	
	</form>
</div>
<?php 
	include("footer.php");
?>