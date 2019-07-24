<center>
	<h1>File - Read, Write , Append , Example</h1>
	<form action="savedata.php" method="POST">
		<textarea rows="5" name="message" cols="30" required="required"></textarea>
		<br><br>
		<button type="submit">Save</button>
		<button type="reset">Reset</button>
		<a href="deletefile.php">Delete</a>
	</form>
	
	<h2>File Read Example using Method 1</h2>
	<?php
    	if(file_exists("message.txt")){
    	   $filedata = file_get_contents("message.txt");
    	   echo $filedata;
    	}
	?>
	<h2>File Read Example using Method 2</h2>
	<?php 
	if(file_exists("message.txt")){
	   $obj = fopen("message.txt","r");
	   echo $filedata2=fread($obj, 50);//50 chracters from message.txt
	   fclose($obj);
	   echo $filedata2;
	}
	 ?>
	 
	 
</center>