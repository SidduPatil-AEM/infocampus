<?php
   include("dbconfig.php");
   $name = $_POST['pname'];
   $price = $_POST['price'];
   $qty = $_POST['qty'];
   $details = $_POST['details'];
   $cat = $_POST['cat'];
   $photo = time().$_FILES['photo']['name'];
   move_uploaded_file($_FILES['photo']['tmp_name'], "image/$photo");
   
   $sql="insert into product(name, price, qty, details, cat, photo)
        values('$name', '$price', '$qty', '$details', '$cat', '$photo')";
		
		$res = mysqli_query($conn,$sql);
		if($res==true)
		{
			header("Location:product.php");
			
		}else
		{
			header("Location:newproduct.php");
		}
		
?>