<html>
    <body>
        <table align="center" cellpadding="7">
            <tr>
                <th><a href="<?php echo BASEURL;?>welcome/index">Home</a></th>
                <th><a href="<?php echo BASEURL;?>welcome/contact">New Contact</a></th>
                <th><a href="<?php echo BASEURL;?>welcome/newuser">New User</a></th>
                <th><a href="<?php echo BASEURL;?>welcome/login">Login</a></th>
            </tr>
        </table>
        <p align="center">
        	<?php echo $this->session->flashdata("msg") ; ?>
        </p>
    </body>
</html>