<?php
    
    setcookie("name",$email,time()-180); // cookie for 180 seconds
    setcookie("pass",$password,time()-180); // cookie for 180 seconds
    header("Location:index.php");

?>