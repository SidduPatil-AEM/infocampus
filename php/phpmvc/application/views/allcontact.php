<table align="center" cellpadding="5" cellspacing="10">
    <caption>Contact List</caption>
    <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>Mobile No</th>
        <th>Email Id</th>
        <th>Message</th>
        <th>Delete</th>
    </tr>
    <?php 
        foreach ($allmessage as $row) 
        {   //form multidimensional to single dimensional
            echo "<tr>";
                echo "<td>$row->id</td>";
                echo "<td>$row->name</td>";
                echo "<td>$row->mobile</td>";
                echo "<td>$row->email</td>";
                echo "<td>$row->message</td>";
                echo "<td><a href='delcontact?id=$row->id'>Delete</a></td>";
                echo "<td><a href='editcontact?id=$row->id'>Edit</a></td>";
            echo "</tr>";
        }
    ?>
</table>