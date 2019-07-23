<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("Usermodel");
    } 
    
	public function index()
	{
		$this->load->view("myheader.php");
		$this->load->view('myhome');
		$this->load->view("footer.php");
	}
	
	public function logout()
	{
	    $data = array(
	        "name"=>"",
	        "id"=>"" 
	    );
	    $this->session->set_userdata($data);//replacing with empty
	    $this->session->set_flashdata("msg","You are logged out successfully");
	    header("Location:../welcome/login");
	}
	
	public function userlist()
	{
	    $message = $this->Usermodel->getuser();
	    $data['userlist']=$message;
	    
	    $this->load->view("header.php");
	    $this->load->view('userlist.php',$data);
	    $this->load->view("footer.php");
	}
	
	public function allcontact()
	{
	    $message = $this->Usermodel->getcontact();
	    
	    $data['allmessage']=$message;
	    
	    $this->load->view("myheader");
	    $this->load->view('allcontact',$data);
	    $this->load->view("footer");
	}
}
