<?php
   include("dbconfig.php");
   $productid = $_POST['productid'];
    $qty = $_POST['qty'];
   $price = $_POST['price'];
   $totalprice = $_POST['totalprice'];
   $status = $_POST['status'];
   $orderdate = $_POST['orderdate'];
   $deliverydate= $_POST['deliverydate'];
   
   
   $sql="insert into myorder(productid, qty, price, totalprice, status, orderdate, deliverydate)
        values('$productid', '$qty', '$price', '$totalprice','$status' , '$orderdate', '$deliverydate')";
		
		$res = mysqli_query($conn,$sql);
		if($res==true)
		{
			header("Location:myorder.php");
			
		}else
		{
			header("Location:neworder.php");
		}
		
?>


 