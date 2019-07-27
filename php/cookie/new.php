<?php
    echo "<h1>Create Cookie Example</h1>";
    
    $name = "User 1";
    $mobile = "9999999999";
    $city = "Bangalore";
    $pincode = 787878;
    
    //setcookie("cookiename","cookievalue","expiry time");
    setcookie("fullname",$name,time()+30); // cookie for 30 seconds
    setcookie("mobile",$mobile,time()+70); // cookie for 70 seconds
    setcookie("city",$city,time()+60); // cookie for 60 seconds
    setcookie("pincode",$pincode,time()+40); // cookie for 40 seconds
    
    header("Location:display.php");
 ?>