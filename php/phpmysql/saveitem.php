<?php
    $itemlist = $_POST["item"];

    $obj = mysqli_connect("localhost","root","","phpmysql");


    for($i=0;$i<count($itemlist);$i++)
    {
        $itemname = $itemlist[$i];
        $sql = "insert into myitem(name) values ('$itemname')";
        mysqli_query($obj,$sql); 
        
    }
?>