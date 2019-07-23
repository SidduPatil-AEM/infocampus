<html>
<head>
	<link rel="stylesheet" href="dist/css/bootstrap.css"></link>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></link>
	<script src="dist/js/jquery.min.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	
			
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">
					PHP API Example of GET Data from other server
				</h3>
			</div>
		</div><!--  row end -->
			
			<?php
    			$ch = curl_init();
    			curl_setopt($ch, CURLOPT_URL, "http://www.cybotrix.com/webservice/getuser.php");
    			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
    			$data = curl_exec($ch);
    			curl_close($ch);
    			$designation = json_decode($data);
    		?>
    		<div class="row">
        		<div class="col-md-3">
        			<form action="saveuser.php" method="post">
        			<h3 class="text-center">User Details</h3>
        				<div class="form-group">
        					<label>Full Name</label>
        					<input type="text" class="form-control" name="fname">
        				</div>
        				<div class="form-group">
        					<label>Mobile No</label>
        					<input type="text" class="form-control" name="mobile">
        				</div>
        				<div class="form-group">
        					<label>E-mail</label>
        					<input type="text" class="form-control" name="email">
        				</div>
        				<div class="form-group">
        					<label>Address</label>
        					<textarea rows="5" class="form-control" cols="22" name="address"></textarea>
        				</div>
        				<div class="form-group text-center">
        					<button class="btn btn-primary">Save User</button>
        				</div>
        			</form>
        		</div>
     			<div class="col-md-9">
            		<table id="myTable" class="table table-bordered table-hover">
            			<thead>
            				<tr>
            					<th>UID</th>
            					<th>fullname</th>
            					<th>email</th>
            					<th>mobile</th>
            					<th>address</th>
            					<th>Delete</th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php 
            				foreach ($designation as $row){
            				    echo "<tr>";
            			        echo "<td>$row->uid</td>";
                                echo "<td>$row->fullname</td>";
                                echo "<td>$row->email</td>";
                                echo "<td>$row->mobile</td>";
                                echo "<td>$row->address</td>";
                                echo "<td> <a class='btn btn-warning' href='deluser.php?id=$row->uid'>Delete</td>";
                                echo "</tr>";
            				}
            				?>
            			</tbody>	
            		</table>
            	</div>
		</div><!-- row end -->
	</div>
</body>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
</html>
