<?php
    include('dbconfig.php');
    $brandname = $_POST['brandname'];
    
    $sql = "insert into brand_list(name) 
                values('$brandname')";
    $res = mysqli_query($conn, $sql);
    
    if(($res == true))
    {
        header("Location:brandlist.php");
    }else{
        header("Location:newbrand.php");
    }
?>    