<h3 align = "center">Welcome Contact Us</h3>

<form action="<?php echo BASEURL;?>welcome/updatecontact" method="post">
<table align="center">
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="name" value="<?php echo $contact->name ?>"></td>
    <tr>
    </tr>
        <td>E-mail</td>
        <td><input type="text" name="email" value="<?php echo $contact->email ?>"></td>
    </tr>
    <tr>
        <td>Mobile</td>
        <td><input type="text" name="mobile" value="<?php echo $contact->mobile ?>"></td>
    </tr>
    <tr>
        <td>Message</td>
        <td>
        	<input type="text" name="message" value="<?php echo $contact->message ?>">
        	<input type="hidden" name="id" value="<?php echo $contact->id ?>">
        </td>
    </tr>
    <tr>
        <th colspan="2">
            <button type="submit">Send Message</button>
            <button type="reset">Clear Message</button>
        </th>
    </tr>
</table>    
</form>