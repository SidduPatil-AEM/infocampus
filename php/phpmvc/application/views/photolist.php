<h3>Photo List</h3>
    <?php 
        foreach ($myphoto as $row) 
        {   //form multidimensional to single dimensional
                echo "<span style='margin:10px;border:20px;'>";
                echo "<img src='../dist/photo/$row->photourl'  height='120' width='120'>";
                echo "</span>";
        }
    ?>