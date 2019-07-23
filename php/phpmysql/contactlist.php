<?php 
	include("header.php");
?>
<table align="center" class="table" cellpadding="0">
        <caption><h3 align="center">Contact List</h3></caption>
    <tr >    
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Message</th>
    </tr>

    <?php
        $obj = mysqli_connect("localhost","root","","phpmysql");
        $sql = "select * from contact order by id asc";
        $result = mysqli_query($obj,$sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>". $row[0] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['message']  . "</td>";
            echo "<td> ------------</td>";
            echo "</tr>";
        }
    ?>
    </table>
<?php 
	include("footer.php");
?>