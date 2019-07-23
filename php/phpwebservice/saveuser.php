<?php
    $name = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $data="n=$name&e=$email&m=$mobile&s=&a=$address";
    
    $url = "http://cybotrix.com/webservice/saveuser.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $serverResponse = curl_exec($ch);
    curl_close ($ch);
    
    header("Location:manageuser.php");
?>