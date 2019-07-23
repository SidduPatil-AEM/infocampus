<?php 
	include("header.php");
?>
<table align="center" class="table" cellpadding="0">
        <caption><h3 align="center">Check List</h3></caption>
    <tr >    
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
     </tr>

    <?php
        $obj = mysqli_connect("localhost","root","","phpmysql");
        $sql = "select * from myitem order by id asc";
        $result = mysqli_query($obj,$sql);
        while($row = mysqli_fetch_row($result))
        {
            echo "<tr>";
            echo "<td>". $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td> ------------</td>";
            echo "</tr>";
        }
    ?>
    </table>
<?php 
	include("footer.php");
?>