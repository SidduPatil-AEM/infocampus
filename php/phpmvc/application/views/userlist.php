<table align="center" cellpadding="10" cellspacing="10">
    <caption>User List</caption>
    <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>Email Id</th>
        <th>Mobile No</th>
        <th>Message</th>
        <th>Delete</th>
    </tr>
    <?php 
        foreach ($userlist as $row) 
        {   //form multidimensional to single dimensional
            echo "<tr>";
                echo "<td>$row->id</td>";
                echo "<td>$row->name</td>";
                echo "<td>$row->email</td>";
                echo "<td>$row->mobile</td>";
                echo "<td>$row->message</td>";
                echo "<td>--Delete---</td>";
            echo "</tr>";
        }
    ?>
</table>