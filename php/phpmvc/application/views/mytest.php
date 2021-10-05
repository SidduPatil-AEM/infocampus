<br>
<div class="container">
<div class="row">
	<div class="col-md-3">
		<ul class="list-group">
			<li class="list-group-item">Products Category</li>
			<?php 
			 foreach ($cat as $row)
			 {
			     echo "<li class='list-group-item'>$row->catname</li>";
			 }
			?>
		</ul>
	</div>
	
	<div class="col-md-9">
		<ul class="list-group">
			<li class="list-group-item">Products Category</li>
			<?php 
			 foreach ($product as $row)
			 {
			     echo "<div class='col-md-4'>
                       <img src='http://localhost/phpmvc/admin/image/$row->photo' height='150' width='150'>     
                            <h4>$row->name</h4>
                            <p>$row->price</p>
                        </div>";
			 }
			?>
		</ul>
	</div>
</div>