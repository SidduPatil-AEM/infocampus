<?php
    $email= $_POST['email'];
    $password = $_POST['pass'];
    
    echo $email;
    echo $password;
    
    setcookie("name",$email,time()+180); // cookie for 180 seconds
    setcookie("pass",$password,time()+180); // cookie for 180 seconds
    
    header("Location:home.php");
?>