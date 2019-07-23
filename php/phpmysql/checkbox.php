<?php 
	include("header.php");
?>
<h1 align="center">Multi Checkkbox Example</h1>
<form action="saveitem.php" method="POST">
<table align="center" class="table">
    <tr>
        <th>Item Name*</th>
        <td scope='row'>
            <input type="checkbox" name="item[]" value="Apple" class="form-check-input">Apple <br>
            <input type="checkbox" name="item[]" value="Banana" class="form-check-input">Banana <br>
            <input type="checkbox" name="item[]" value="Orange" class="form-check-input">Orange<br>
            <input type="checkbox" name="item[]" value="Grapes" class="form-check-input"> Grapes<br>
            <input type="checkbox" name="item[]" value="Pomegranate" class="form-check-input">Pomegranate<br>    
        </td>
        
    </tr>
    <tr>
    <td>
               <button type="submit">Save</button> &nbsp;&nbsp
               <button type="clear">Clear</button> &nbsp;&nbsp
        </td>
    </tr>
 </table>   
</form>
<?php 
	include("footer.php");
?>