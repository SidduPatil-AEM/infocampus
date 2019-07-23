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
		$this->load->view("header.php");
		$this->load->view('mytest');
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
	    header("Location:allcontact");//for redirection
	}
	
	public function updatecontact()
	{
	    $id=$_POST['id'];
	    $data = array(
	        "name"=>$_POST['name'],
	        "email"=>$_POST['email'],
	        "mobile"=>$_POST['mobile'],
	        "message"=>$_POST['message'],
	    );
	    $this->Usermodel->updatecontact($data,$id);//save
	    $this->session->set_flashdata("msg","Updated Contact Successfully");
	    header("Location:allcontact");//for redirection
	}
	
	public function delcontact()
	{
	    $id = $_GET['id'];
	    $user = $this->Usermodel->delcontact($id);//saving to db
	    $this->session->set_flashdata("msg","Contact Deleted Successfully");
	    header("Location:allcontact");//for redirection
	}
	
	public function editcontact()
	{
	    $id = $_GET['id'];
	    $dataarray = array("id"=>$id);
	    $data['contact']=$this->Usermodel->getcontactdata($dataarray);
	    $this->load->view('header');
	    $this->load->view('editcontact',$data);
	    $this->load->view('footer');
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
	    header("Location:userlist");//for redirection
	}

	public function newphoto()
	{
		$this->load->view("header.php");
		$this->load->view('newphoto.php');
		$this->load->view("footer.php");
	}
	
	public function uploadphoto()
	{
	    $photoName = time().$_FILES['uphoto']['name'];
	    $tmpname = $_FILES['uphoto']['tmp_name'];
	    move_uploaded_file($tmpname , "dist/photo/$photoName");//copy to folder
	    $dataarray = array("photourl"=>$photoName);
	    $user = $this->Usermodel->savephoto($dataarray);//saving to db
	    $this->session->set_flashdata("msg","Photo Uploaded Successfully");
	    header("Location:photolist");//to redirect
	}

	public function photolist()
	{
	    $message = $this->Usermodel->photolist();
	    $data['myphoto']=$message;
		$this->load->view("header");
		$this->load->view('photolist',$data);
		$this->load->view("footer");
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
