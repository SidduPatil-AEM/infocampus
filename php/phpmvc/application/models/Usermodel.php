<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    
    var $db;
    
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
    }

    public function savecontact($arraydata) {
        $this->db->insert("contact",$arraydata);//insert as per codeigniter
        return true;
    }
    
    public function getcontact() {
        $alldata = $this->db->get("contact");
        return $alldata->result();//to fetch all records
        //return $alldata->row();//to fetch single record
    }
    
    public function delcontact($id) {
        $this->db->where('id',$id);
        $this->db->delete("contact");
        return true;
    }
    
    public function getcontactdata($dataarray) {
        $this->db->where($dataarray);
        $res = $this->db->get("contact");
        return $res->row();
    }
    
    public function updatecontact($dataarray,$id) {
        $this->db->where('id',$id);
        $this->db->update("contact",$dataarray);
        return true;
    }
    
    public function saveuser($arraydata) {
        $data = $this->db->insert("user",$arraydata);
        return true;
    }
    
    public function getuser() {
        $data = $this->db->get("user");
        return $data->result();
    }
    
    public function savephoto($dataarray) {
        $data = $this->db->insert("photo",$dataarray);
        return true;
    }
    
    public function photolist() {
        $data = $this->db->get("photo");
        return $data->result();
    }
    
    public function usercheck($dataarray) {
        $this->db->where($dataarray);
        $data = $this->db->get("user");
        if($data->num_rows()>0){
            $row = $data->row();
            $sessiondata = array(
                "name"=>$row->name,
                "id"=>$row->id
            );
            $this->session->set_userdata($sessiondata);
            return true;            
        }
        return false;
    }
    
}
?>