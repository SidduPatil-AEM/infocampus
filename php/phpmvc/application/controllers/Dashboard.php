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
		$this->load->view("myheader");
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
	
	public function allcontact()
	{
	    $message = $this->Usermodel->getcontact();
	    
	    $data['allmessage']=$message;
	    
	    $this->load->view("myheader");
	    $this->load->view('allcontact',$data);
	    $this->load->view("footer");
	}
	
	public function userlist()
	{
	    $message = $this->Usermodel->getuser();
	    $data['userlist']=$message;
	    
	    $this->load->view("myheader.php");
	    $this->load->view('userlist.php',$data);
	    $this->load->view("footer.php");
	}
	
	public function photolist()
	{
	    $message = $this->Usermodel->photolist();
	    $data['myphoto']=$message;
	    $this->load->view("myheader");
	    $this->load->view('photolist',$data);
	    $this->load->view("footer");
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
	    $this->load->view('myheader');
	    $this->load->view('editcontact',$data);
	    $this->load->view('footer');
	}
	
	
	public function newphoto()
	{
	    $this->load->view("myheader.php");
	    $this->load->view('newphoto.php');
	    $this->load->view("footer.php");
	}
	
	public function uploadphoto()
	{
	    $photoName = time().$_FILES['uphoto']['name'];
	    $tmpname = $_FILES['uphoto']['tmp_name'];
	    move_uploaded_file($tmpname , "dist/photo/$photoName");//copy to folder
	    $dataarray = array(
	        "photourl"=>$photoName,
	        "userid"=>$this->session->userdata("id")
	    );
	    $user = $this->Usermodel->savephoto($dataarray);//saving to db
	    $this->session->set_flashdata("msg","Photo Uploaded Successfully");
	    header("Location:photolist");//to redirect
	}
	
}
