<?php
/*
	Description:Controller for Create Product
	Author:samiran
	Date:27/3/2017
*/
class Createproduct extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Createproduct_model');
		/* if(!$this->session->userdata('user_info'))
		{
		   redirect('Login');
		} */
	}
	public function index()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);exit;
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Create_setp1',$data);
		$this->load->view('common_footer');
		
		
	}
	public function post_product_idea_data()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    
			//echo "<pre>";print_r($request);exit;
			
			    $ideaman = $request->ideaman;
			    $ideaurl = $request->ideaurl; 
				
				$BSR = $request->BSR;
				$Priority = $request->Priority;
				$TM_status = $request->TM_status;
				$Primaryword = $request->Primaryword;
				$Secondaryword = $request->Secondaryword;
				$Niche_tags = $request->Niche_tags;
				$Notes = $request->Notes;
				$Idea_status = $request->Idea_status;
				$Thumbnail=$request->Thumbnail;

				
			  /* $ideaman = 1; 
			  echo $ideaurl = 'ggg'; */
		     $success=$this->Createproduct_model->post_product_idea_data($ideaman,$ideaurl,$BSR,$Priority,$TM_status,$Primaryword,$Secondaryword,$Niche_tags,$Notes,$Idea_status,$Thumbnail);	
		     echo json_encode($success);
	}
	public function idea_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Ideas',$data);
		$this->load->view('common_footer');
		
		
	}
	public function design_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Designs',$data);
		$this->load->view('common_footer');
		
		
	}
	public function copy_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Copywrites',$data);
		$this->load->view('common_footer');
		
		
	}
	public function upload_product_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Upload_productlist',$data);
		$this->load->view('common_footer');
		
		
	}
	public function masterview_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Masterview',$data);
		$this->load->view('common_footer');
		
		
	}
	public function get_idea_list()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_idea_list($user_id);	
		     echo json_encode($success);
	}
	public function get_design_list()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_design_list($user_id);	
		     echo json_encode($success);
	}
	public function get_copy_list()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_copy_list($user_id);	
		     echo json_encode($success);
	}
	public function get_upload_list()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_upload_list($user_id);	
		     echo json_encode($success);
	}
	
	public function get_masterview_list()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_masterview_list($user_id);	
		     echo json_encode($success);
	}
	
	
	public function get_idea_list_todesign()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_idea_list_todesign($user_id);	
		     echo json_encode($success);
	}
	
	public function get_idea_list_tocopywrite()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_idea_list_tocopywrite($user_id);	
		     echo json_encode($success);
	}
	public function get_idea_list_toupload()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_idea_list_toupload($user_id);	
		     echo json_encode($success);
	}
	
	public function idea_delete()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
			 
		     $id = $request->id;
		     $success=$this->Createproduct_model->idea_delete($id);	
		     echo json_encode($success);
	}
	public function design_delete()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
			 
		     $id = $request->id;
		     $success=$this->Createproduct_model->design_delete($id);	
		     echo json_encode($success);
	}
	public function copy_delete()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
			 
		     $id = $request->id;
		     $success=$this->Createproduct_model->copy_delete($id);	
		     echo json_encode($success);
	}
	
	public function idea_edit($id)
	{
		//echo "ssssssss";
		 $id=$this->uri->segment(3);
		$data['user_info'] =$this->session->userdata('user_info');
		$data['data']=$this->Createproduct_model->idea_edit($id);
		//print_r($data);
		//exit;
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Create_setp1_edit',$data);
		$this->load->view('common_footer'); 
		
		
	}
	public function design_add($id)
	{
		$id=$this->uri->segment(3);
		$data['user_info'] =$this->session->userdata('user_info');
		$data['data']=$this->Createproduct_model->design_add($id);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Create_setp2_edit',$data);
		$this->load->view('common_footer');
		
		
	}
	public function copy_add($id)
	{
		$id=$this->uri->segment(3);
		$data['user_info'] =$this->session->userdata('user_info');
		$data['data']=$this->Createproduct_model->copy_add($id);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Create_setp3_edit',$data);
		$this->load->view('common_footer');
		
		
	}
	public function upload_product($id)
	{
		$id=$this->uri->segment(3);
		$data['user_info'] =$this->session->userdata('user_info');
		$data['data']=$this->Createproduct_model->upload_product($id);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Create_setp4_edit',$data);
		$this->load->view('common_footer');
		
		
	}
	public function update_product_idea_data()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		      //echo "<pre>";print_r($postdata);exit;
			    $ideaman = $request->ideaman;
			    $ideaurl = $request->ideaurl; 
				
				$BSR = $request->BSR;
				$Priority = $request->Priority;
				$TM_status = $request->TM_status;
				$Primaryword = $request->Primaryword;
				$Secondaryword = $request->Secondaryword;
				$Niche_tags = $request->Niche_tags;
				$Notes = $request->Notes;
				$Idea_status = $request->Idea_status;
				$id = $request->id;
				$Thumbnail=$request->Thumbnail;

				
			  /* $ideaman = 1; 
			  echo $ideaurl = 'ggg'; */
		     $success=$this->Createproduct_model->update_product_idea_data($ideaman,$ideaurl,$BSR,$Priority,$TM_status,$Primaryword,$Secondaryword,$Niche_tags,$Notes,$Idea_status,$id,$Thumbnail);	
		     echo json_encode($success);
	}
	public function update_product_design_data()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    
			    $design_man = $request->design_man;
			    $proof_me_link = $request->proof_me_link; 
				
				$fileinfo = $request->fileinfo;
				$drive_link_to_png = $request->drive_link_to_png;
				$design_level = $request->design_level;
				
				$color1 = $request->color1;
				$color2 = $request->color2;
				$color3 = $request->color3;
				$color4 = $request->color4;
				$color5 = $request->color5;
				
				$design_status = $request->design_status;
				$id = $request->id;
				
		     $success=$this->Createproduct_model->update_product_design_data($design_man,$proof_me_link,$fileinfo,$drive_link_to_png,$design_level,$color1,$color2,$color3,$color4,$color5,$design_status,$id);	
		     echo json_encode($success);
	}
	
	
	public function update_product_copy_data()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    
			    $Copy_Writer = $request->Copy_Writer;
			    $Brand_Name = $request->Brand_Name; 
				
				$Title = $request->Title;
				$Price = $request->Price;
				
				
				$Bullet1 = $request->Bullet1;
				
				$Bullet2 = $request->Bullet2;
				$Product_description = $request->Product_description;
				$Copy_status = $request->Copy_status;
				$id = $request->id;
				
		     $success=$this->Createproduct_model->update_product_copy_data($Copy_Writer,$Brand_Name,$Title,$Price,$Bullet1,$Bullet2,$Product_description,$Copy_status,$id);	
		     echo json_encode($success);
	}
	
	public function update_product_upload_data()
	{
		     $postdata = file_get_contents("php://input");
		     $request = json_decode($postdata);
		    
			    $Uploader_man = $request->Uploader_man;
			    $Upload_status = $request->Upload_status; 
				$Upload_status2 = $request->Upload_status2;
				$Upload_status3 = $request->Upload_status3;
				
				$id = $request->id;
				
		     $success=$this->Createproduct_model->update_product_upload_data($Uploader_man,$Upload_status,$Upload_status2,$Upload_status3,$id);	
		     echo json_encode($success);
	}
	
	public function design_todo_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Design_todo',$data);
		$this->load->view('common_footer');
		
		
	}
	public function copy_todo_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Copy_todo',$data);
		$this->load->view('common_footer');
		
		
	}
	public function upload_todo_list()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		//print_r($data);
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Upload_todo',$data);
		$this->load->view('common_footer');
		
		
	}
	
	
	public function upload_file()
	{
		$data['user_info'] =$this->session->userdata('user_info');
		$upload_dir = "images/"; 
if(isset($_FILES["file"]["type"]))
{ 
    $validextensions = array("jpeg", "jpg", "png", "gif");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0){
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {
            if (file_exists($upload_dir.$_FILES["file"]["name"])) {                
                echo 'File already exist';
            } else {
                $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                $filename = rand().$_FILES['file']['name'];
                $targetPath = $upload_dir.$filename; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                //echo 'success';
				echo $targetPath;
            }
        }
    } 
}
			   
			   
	}
	
	public function get_dashbord_view()
	{
		     $data['user_info'] =$this->session->userdata('user_info');
			 $user_id=$data['user_info'][0]->admin_id;
		     $success=$this->Createproduct_model->get_dashbord_view($user_id);	
		     echo json_encode($success);
	}
	
	public function get_preview()
	{
		   // $id=$this->uri->segment(3);
		    $p_id=21;
		     $data['user_info'] =$this->session->userdata('user_info');
			 $success=$this->Createproduct_model->get_preview($p_id);
			 $data['p_data']=$success;
		$this->load->view('common_header');
		$this->load->view('common_sidemenu',$data);
		$this->load->view('Product/Preview',$data);
		$this->load->view('common_footer');			 
		     //echo json_encode($success);
	}
	
}