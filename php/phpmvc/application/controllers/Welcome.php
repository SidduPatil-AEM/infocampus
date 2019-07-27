<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("Usermodel");
    } 
    
	public function index()
	{
	    $data['product']=$this->Usermodel->getproduct();
	    $data['cat']=$this->Usermodel->getcategory();
		$this->load->view("header.php");
		$this->load->view('mytest',$data);
		$this->load->view("footer.php");
	}

	public function contact()
	{
		$this->load->view("header.php");
		$this->load->view('contactus');
		$this->load->view("footer.php");
	}
	
	public function savecontact()
	{
	    $data = array(
	               "name"=>$_POST['name'],
	               "email"=>$_POST['email'],
	               "mobile"=>$_POST['mobile'],
	               "message"=>$_POST['message'],
	           );
	    $this->Usermodel->savecontact($data);//save
	    $this->session->set_flashdata("msg","Contact Save Successfully");
	    header("Location:../dashboard/allcontact");//for redirection
	}

	public function newuser()
	{
		$this->load->view("header.php");
		$this->load->view('newuser.php');
		$this->load->view("footer.php");
	}
	
	public function saveuser(){
	    $data = array(
	        "name"=>$_POST['name'],
	        "email"=>$_POST['email'],
	        "password"=>$_POST['password'],
	        "mobile"=>$_POST['mobile'],
	        "message"=>$_POST['message'],
	    );
	    $this->Usermodel->saveuser($data);//save
	    $this->session->set_flashdata("msg","User Saved Successfully");
	    header("Location:../dashboard/userlist");//for redirection
	}
	
	public function login()
	{
	    $this->load->view("header");
	    $this->load->view('login');
	    $this->load->view("footer");
	}

	public function usercheck()
	{
	    $data = array(
	        "email"=>$_POST['email'],
	        "password"=>$_POST['password']
	    );
	    $status=$this->Usermodel->usercheck($data);
	    if($status==true)
	    {
	        header("Location:../dashboard/index");
	    }
	    else 
	    {
	        $this->session->set_flashdata("msg","Invalid User");
	        header("Location:login");
	    }
	}
	
	public function nopageredirect()
	{
		header("Location:http://localhost/phpmvc/welcome/pagenotfound");
	}
	
	public function pagenotfound()
	{
		$this->load->view("pagenotfound");
	}
	
	public function header()
	{
		$this->load->view("header.php");
	}
}
