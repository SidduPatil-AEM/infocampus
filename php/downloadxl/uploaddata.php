<?php 
	$conn = mysqli_connect("localhost", "root", "", "myphp");
	$filename=$_FILES["userfile"]["tmp_name"];
		 if($_FILES["userfile"]["size"] > 0)
		 {
				$file = fopen($filename, "r");
				 while (($row = fgetcsv($file, 10000, ",")) !== FALSE)
				 {
				
					$sql = "INSERT into user2(name,mobile,email,password) 
									 values('".trim($row[0])."',
											'".trim($row[1])."',
											'".trim($row[2])."',
											'".trim($row[3])."')";
					mysqli_query($conn,$sql);
				}
		}	 
	fclose($file);
	header("Location:uploaxl.php");
?>
<!---
	Mr abc|  999999 | abc@gmail.com | 1243
-->

file : type - csv(comma delimitted) 

