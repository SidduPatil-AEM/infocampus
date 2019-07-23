<?php 
	include("header.php");
?>
    <table align="center" class="table" cellpadding="0">
        <caption><h3>Enquiry List</h3></caption>
    <tr >    
        <th>ID</th>
        <th>Full Name</th>
        <th>Mobile No</th>
        <th>City</th>
        <th>Address</th>
        <th>Action</th>
    </tr>

    <?php
        $obj = mysqli_connect("localhost","root","","phpmysql");
        $sql = "select * from enquiry order by id desc";
        $result = mysqli_query($obj,$sql);
        while($row = mysqli_fetch_object($result))
        {
            echo "<tr>";
            echo "<td scope='row'> $row->id </td>";
            echo "<td> $row->name </td>";
            echo "<td> $row->mobile </td>";
            echo "<td> $row->city </td>";
            echo "<td> $row->address </td>";
            echo "<td> ------------</td>";
            echo "</tr>";
        }
    ?>
    </table>
<?php 
	include("footer.php");
?>