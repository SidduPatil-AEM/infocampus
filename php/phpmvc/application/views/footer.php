<?php  
    print_r($_SERVER['REMOTE_ADDR']);
    $url=$_SERVER['REQUEST_URI'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $this->db = $this->load->database("default", TRUE);
    $sql=array(
        "ip"=>$ip,
        "pagename"=>$url
    );
    $this->db->insert("uservisit",$sql);
    
?>
</div>