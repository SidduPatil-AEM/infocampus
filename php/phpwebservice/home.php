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
		<div class="row">
			<?php 
    			$ch = curl_init();
    			curl_setopt($ch, CURLOPT_URL, "https://jobswalkin.com/api/getkeyword");
    			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
    			$data = curl_exec($ch);
    			curl_close($ch);
    			$designation = json_decode($data);
    		?>
    		<table id="myTable" class="table table-bordered table-hover">
    			<thead>
    				<tr>
    					<th>ID</th>
    					<th>Designation</th>
    					<th>Status</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php 
    				foreach ($designation as $row){
    				    echo "<tr>";
    			        echo "<td>$row->designation_id</td>";
                        echo "<td>$row->designation_name</td>";
                        echo "<td>$row->status</td>";
                        echo "</tr>";
    				}
    				?>
    			</tbody>	
    		</table>
		</div><!-- row end -->
	</div>
</body>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
</html>
