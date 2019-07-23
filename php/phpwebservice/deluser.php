<?php
    $id = $_GET['id'];
    $url = "http://www.cybotrix.com/webservice/deleteuser.php?id=$id";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    header("Location:manageuser.php");
?>