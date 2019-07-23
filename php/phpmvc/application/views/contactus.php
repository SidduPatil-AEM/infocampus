<h3 align = "center">Welcome Contact Us</h3>

<form action="<?php echo BASEURL;?>welcome/savecontact" method="post">
<table align="center">
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="name"></td>
    <tr>
    </tr>
        <td>E-mail</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Mobile</td>
        <td><input type="text" name="mobile"></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><input type="text" name="message"></td>
    </tr>
    <tr>
        <th colspan="2">
            <button type="submit">Send Message</button>
            <button type="reset">Clear Message</button>
        </th>
    </tr>
</table>    
</form>