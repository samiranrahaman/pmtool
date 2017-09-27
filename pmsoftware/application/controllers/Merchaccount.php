<?php
/*
	Description:Controller for Merchaccount
	Author:samiran
	Date:27/3/2017
*/
class Merchaccount extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Merchaccount_model');
		if(!$this->session->userdata('user_info'))
		{
		   redirect('Login');
		}
	}
	public function index()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Merchaccount/List',$data);
		$this->load->view('common_footer');
		
		
	}
	public function add_merch()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Merchaccount/Addmerch',$data);
		$this->load->view('common_footer');
		
		
	}
	public function post_add_user()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    
			    $name = $request->firstname;
			    
		     $success=$this->Merchaccount_model->post_add_user($name);	
		     echo json_encode($success);
	}
	public function update_add_merch()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    // print_r($request);exit; 
			   $name = $request->name;
			   $id = $request->id; 
				 
		     $success=$this->Merchaccount_model->update_add_merch($name,$id);	
		     echo json_encode($success);
	}
	public function get_user_list()
	{
		     $success=$this->Merchaccount_model->get_user_list();	  
		     echo json_encode($success);
	}
	
	
	
	public function edit_merch_details($id)
	{
		 $id=$this->uri->segment(3);
		
		$data['user_info'] =$this->session->userdata('user_info');
		$data['data']=$this->Merchaccount_model->edit_merch_details($id);
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Merchaccount/Editmerch',$data);
		$this->load->view('common_footer');
		
		
	}
	
	public function merch_delete()
	{
		 $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    $id = $request->id;
			//$id=18;
		$success=$this->Merchaccount_model->merch_delete($id);	 
		echo json_encode($success);
	}
	
	public function user_status()
	{
		$postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
			 $id = $request->id;
			 $success=$this->Adminuser_model->user_status($id);
            
			echo $success;
			
	}
}