<html>
    <body>
        <table align="center" cellpadding="7">
        <tr>
        <?php 
        	$name = $this->session->userdata('name');
        	print_r($name);
        ?>
        </tr>
            <tr>
                <th><a href="<?php echo BASEURL;?>dashboard/index">Home</a></th>
                <th><a href="<?php echo BASEURL;?>dashboard/allcontact">Contact List</a></th>
                <th><a href="<?php echo BASEURL;?>dashboard/userlist">User List</a></th>
                <th><a href="<?php echo BASEURL;?>dashboard/newphoto">New Photo</a></th>
                <th><a href="<?php echo BASEURL;?>dashboard/photolist">Photo List</a></th>
                <th>
                	Welcome - <?php echo $this->session->userdata('name'); 	?> -
                	<a href="<?php echo BASEURL;?>dashboard/logout">Logout</a>
                </th>
            </tr>
        </table>
        <p align="center">
        	<?php echo $this->session->flashdata("msg") ; ?>
        </p>
    </body>
</html>