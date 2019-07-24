<?php
    $message = $_POST['message'];
    $postData = date("d/m/y");
    
    if (file_exists("message,txt")) {
        $fileObj = fopen("message.txt","a");
        $finaldata = $message . "<br> Posted on : " . $postData . "<br>";//data
        fwrite($fileObj, $finaldata);
        fclose($fileObj);
        header("Location:index.php");
    }
    
?>