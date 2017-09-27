<?php
/*
    Description : Model for Createproduct
    Author      : samiran
    Date        : 28/10/2016
*/
class Createproduct_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    } 
    public function post_product_idea_data($ideaman,$ideaurl,$BSR,$Priority,$TM_status,$Primaryword,$Secondaryword,$Niche_tags,$Notes,$Idea_status,$Thumbnail)
	{
		$my_rand_strng = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -10);
		 $data = array(
		   'idea_man' =>$ideaman,
		    'idea_url' =>$ideaurl,
			'BSR' =>$BSR,
			'Priority' =>$Priority,
			'TM_status' =>$TM_status,
			'Primaryword' =>$Primaryword,
			'Secondaryword' =>$Secondaryword,
			'Niche_tags' =>$Niche_tags,
			'Notes' =>$Notes,
			'Idea_status' =>$Idea_status,
			'Thumbnail'=>$Thumbnail,
			'idea_post_time'=>date('Y-m-d H:i:s',time()),
			'product_number'=>"P".$my_rand_strng,
			
		);

		 $this->db->insert('pm_product', $data);
		 $id=$this->db->insert_id() ; 
		if($id)
		{
			return $id;
		}
		else
		{
			return 0;
		}
		
	}
	function get_idea_list($user_id)
	{
		if($user_id==1)
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id";
		}
		else
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.idea_man=$user_id order by a.id desc";
		}
		
		 
		 
		 $query1= $this->db->query($sql1);
	      $query_res1=$query1->result();
		  foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		 
		 
		 
		 return $query_res1;
		  
		  
	}
	function get_design_list($user_id)
	{
		if($user_id==1)
		{
			$sql1="select * from pm_product where design_man>0";
		}
		else
		{
			$sql1="select * from pm_product where design_man=$user_id  order by id desc";
		}
		
		 
		 
		 $query1= $this->db->query($sql1);
	     $query_res1=$query1->result();
		 foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		 
		 
		 
		 return $query_res1;
	}
	function get_copy_list($user_id)
	{
		if($user_id==1)
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Copy_Writer>0";
		}
		else
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Copy_Writer=$user_id  order by a.id desc";
		}
		
		 
		 
		 $query1= $this->db->query($sql1);
	      $query_res1=$query1->result();
		 foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		 
		 
		 
		 return $query_res1;
	}
	function get_upload_list($user_id)
	{
		if($user_id==1)
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Uploader_man>0";
			
		}
		else
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Uploader_man=$user_id  order by a.id desc";
		}
		
		 
		 
		 $query1= $this->db->query($sql1);
	     $query_res1=$query1->result();
		 
		 foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		 
		 
		 
		 return $query_res1;
		 
		 
		 
		 
		 
	}
	
	function get_masterview_list($user_id)
	{
		if($user_id==1)
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Upload_status=3";
			
		}
		else
		{
			$sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Uploader_man=$user_id and Upload_status=3 order by a.id desc";
		}
		
		 
		 
		 $query1= $this->db->query($sql1);
	     $query_res1=$query1->result();
		 
		 foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		 
		 
		 
		 return $query_res1;
		 
		 
		 
		 
		 
	}
	
	function get_idea_list_todesign($user_id)
	{
		/* if($user_id==1)
		{
			$sql1="select * from pm_product where Idea_status=3";
		}
		else
		{
			$sql1="select * from pm_product where idea_man=$user_id order by id desc";
		} */
		
		 $sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Idea_status=3 and a.design_man=0";
		 
		 $query1= $this->db->query($sql1);
	      $query_res1=$query1->result();
		  foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		
		// echo"<pre>";print_r($query_res1);
		return $query_res1;
	}
	function get_idea_list_tocopywrite($user_id)
	{
		
		 $sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Idea_status=3 and a.Copy_Writer=0";
		 
		 $query1= $this->db->query($sql1);
	      $query_res1=$query1->result();
		  foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		
		// echo"<pre>";print_r($query_res1);
		return $query_res1;
		  
	}
	function get_idea_list_toupload($user_id)
	{
		
		 /* $sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Idea_status=3 and a.Copy_status=3 and a.design_status=3"; */
		 $sql1="select * from pm_product a inner join pm_admin b on a.idea_man=b.admin_id where a.Idea_status=3 and a.Copy_status=3 and a.design_status=3";
		 $query1= $this->db->query($sql1);
	     //return $query_res1=$query1->result();
		 $query_res1=$query1->result();
		 foreach($query_res1 as $k=>$data)
		 {
                $design_man=$data->design_man;
			   $sql12="select admin_first_name  'designer_first_name',admin_last_name  'designer_last_name' from pm_admin b where b.admin_id=".$design_man;
		      $query12= $this->db->query($sql12);
		      $query_res12=$query12->result();
			  
			   if(!empty($query_res12))
			  {
		     $designer_first_name=$query_res12[0]->designer_first_name;
		     $designer_last_name=$query_res12[0]->designer_last_name;
		  
		  $data->designer_first_name=$designer_first_name;
		  $data->designer_last_name=$designer_last_name;
		      }
			  else
			  {
				  $data->designer_first_name='';
		         $data->designer_last_name='';
			  }
		  
		     $Copy_Writer=$data->Copy_Writer;
			   $sql12="select admin_first_name  'copy_first_name',admin_last_name  'copy_last_name' from pm_admin b where b.admin_id=".$Copy_Writer;
		      $query12= $this->db->query($sql12);
		      $query_res123=$query12->result();
			  if(!empty($query_res123))
			  {
		     $copy_first_name=$query_res123[0]->copy_first_name;
		     $copy_last_name=$query_res123[0]->copy_last_name;
		  
			  $data->copy_first_name=$copy_first_name;
			  $data->copy_last_name=$copy_last_name;
				  
				}
			  else
				{
				 $data->copy_first_name='';
			     $data->copy_last_name='';
				}
		  
		  $Uploader_man=$data->Uploader_man;
			   $sql12="select admin_first_name  'uploder_first_name',admin_last_name  'uploder_last_name' from pm_admin b where b.admin_id=".$Uploader_man;
		      $query12= $this->db->query($sql12);
		      $query_res124=$query12->result();
			  if(!empty($query_res124))
			  {
		     $uploder_first_name=$query_res124[0]->uploder_first_name;
		     $uploder_last_name=$query_res124[0]->uploder_last_name;
		  
			  $data->uploder_first_name=$uploder_first_name;
			  $data->uploder_last_name=$uploder_last_name;
				 
				}
				else
				{
					$data->uploder_first_name='';
			     $data->uploder_last_name='';
				}
		  
		  
		  
		  
		 }
		
		// echo"<pre>";print_r($query_res1);
		return $query_res1;
		
	}
	public function idea_delete($id)
	{
		  $sql1="delete from pm_product where id=".$id;
		  $query1= $this->db->query($sql1);
	     return 1;
	}
	public function design_delete($id)
	{
		 /*  $sql1="delete from pm_product where id=".$id;
		  $query1= $this->db->query($sql1);
	     return 1; */
		 
		 $data = array(
		   'design_man' =>0,
		    'proof_me_link' =>'',
			'fileinfo' =>'',
			'drive_link_to_png' =>'',
			'design_level' =>'',
			'color1' =>'',
			'color2' =>'',
			'color3' =>'',
			'design_status' =>'',
		);
		
		$this->db->where('id',$id);
		$this->db->update('pm_product', $data);
		return 1;
		 
		 
	}
	
	
	public function copy_delete($id)
	{
		
		 $data = array(
		   'Copy_Writer' =>0,
		    'Brand_Name' =>'',
			'Title' =>'',
			'Price' =>'',
			'Bullet1' =>'',
			'Bullet2' =>'',
			'Product_description' =>'',
			'Copy_status' =>'',
		);
		$this->db->where('id',$id);
		$this->db->update('pm_product', $data);
		return 1;
		 
		 
	}
	public function idea_edit($id)
	{
		  $sql1="SELECT * from pm_product where id=".$id;
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	
	public function design_add($id)
	{
		 $sql1="SELECT * from pm_product where id=".$id;
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	
	public function copy_add($id)
	{
		 $sql1="SELECT * from pm_product where id=".$id;
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	public function upload_product($id)
	{
		 $sql1="SELECT * from pm_product where id=".$id;
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	
	
	public function update_product_idea_data($ideaman,$ideaurl,$BSR,$Priority,$TM_status,$Primaryword,$Secondaryword,$Niche_tags,$Notes,$Idea_status,$id,$Thumbnail)
	{
		 $data = array(
		   'idea_man' =>$ideaman,
		    'idea_url' =>$ideaurl,
			'BSR' =>$BSR,
			'Priority' =>$Priority,
			'TM_status' =>$TM_status,
			'Primaryword' =>$Primaryword,
			'Secondaryword' =>$Secondaryword,
			'Niche_tags' =>$Niche_tags,
			'Notes' =>$Notes,
			'Idea_status' =>$Idea_status,
			'Thumbnail'=>$Thumbnail,
			'idea_post_time'=>date('Y-m-d H:i:s',time()),
		);
		
		$this->db->where('id',$id);
		$this->db->update('pm_product', $data);
		return 1;

		 /* $this->db->insert('pm_product', $data);
		 $id=$this->db->insert_id() ; 
		if($id)
		{
			return $id;
		}
		else
		{
			return 0;
		} */
		
	}
	
	public function update_product_design_data($design_man,$proof_me_link,$fileinfo,$drive_link_to_png,$design_level,$color1,$color2,$color3,$color4,$color5,$design_status,$id)
	{
		 $data = array(
		   'design_man' =>$design_man,
		    'proof_me_link' =>$proof_me_link,
			'fileinfo' =>$fileinfo,
			'drive_link_to_png' =>$drive_link_to_png,
			'design_level' =>$design_level,
			'color1' =>$color1,
			'color2' =>$color2,
			'color3' =>$color3,
			'color4' =>$color4,
			'color5' =>$color5,
			'design_status' =>$design_status,
			'design_post_time'=>date('Y-m-d H:i:s',time()),
		);
		
		$this->db->where('id',$id);
		$this->db->update('pm_product', $data);
		return 1;

		 /* $this->db->insert('pm_product', $data);
		 $id=$this->db->insert_id() ; 
		if($id)
		{
			return $id;
		}
		else
		{
			return 0;
		} */
		
	}
	public function update_product_copy_data($Copy_Writer,$Brand_Name,$Title,$Price,$Bullet1,$Bullet2,$Product_description,$Copy_status,$id)
	{
		 $data = array(
		   'Copy_Writer' =>$Copy_Writer,
		    'Brand_Name' =>$Brand_Name,
			'Title' =>$Title,
			'Price' =>$Price,
			'Bullet1' =>$Bullet1,
			'Bullet2' =>$Bullet2,
			'Product_description' =>$Product_description,
			'Copy_status' =>$Copy_status,
			'copy_post_time'=>date('Y-m-d H:i:s',time()),
		);
		
		$this->db->where('id',$id);
		$this->db->update('pm_product', $data);
		return 1;

		 /* $this->db->insert('pm_product', $data);
		 $id=$this->db->insert_id() ; 
		if($id)
		{
			return $id;
		}
		else
		{
			return 0;
		} */
		
	}
	
	public function update_product_upload_data($Uploader_man,$Upload_status,$id)
	{
		 $data = array(
		   'Uploader_man' =>$Uploader_man,
		    'Upload_status' =>$Upload_status,
			'upload_post_time'=>date('Y-m-d H:i:s',time()),
		);
		
		$this->db->where('id',$id);
		$this->db->update('pm_product', $data);
		return 1;

		 
	}
	
	function get_dashbord_view($user_id)
	{
		$sql1="select count(*) 'totalcomplete' from pm_product a  where 
		a.idea_man>0 and 
        a.Upload_status!=3		
		";
		 $query1= $this->db->query($sql1);
	     $query_res1=$query1->result();
		 $totalcomplete=$query_res1[0]->totalcomplete;
		 
		 $sql12="select count(*) 'designcomplete' from pm_product a  where 
		a.design_status=3 
		";
		 $query12= $this->db->query($sql12);
	     $query_res12=$query12->result();
		 $designcomplete=$query_res12[0]->designcomplete;
		 
		 $sql123="select count(*) 'copycomplete' from pm_product a  where 
		a.Copy_status=3 
		";
		 $query123= $this->db->query($sql123);
	     $query_res123=$query123->result();
		 $copycomplete=$query_res123[0]->copycomplete;
		 
		 
		  $sql1234="select count(*) 'uploadcomplete' from pm_product a  where 
		a.Upload_status=3 
		";
		 $query1234= $this->db->query($sql1234);
	     $query_res1234=$query1234->result();
		 $uploadcomplete=$query_res1234[0]->uploadcomplete;
		 
		 
		 $sql12345="select count(*) 'total',Priority, design_level from pm_product a group by Priority
		";
		 $query12345= $this->db->query($sql12345);
	     $query_res12345=$query12345->result();
		 
		// echo "<pre>"; print_r($query_res12345);
		 //$uploadcomplete=$query_res1234[0]->uploadcomplete;
		 
		 
		 
		 $array=array("totalcomplete"=>$totalcomplete,"designcomplete"=>$designcomplete,"copycomplete"=>$copycomplete,"uploadcomplete"=>$uploadcomplete,"Prirityarray"=>$query_res12345);
		 
		 
		 
		 
		 
		 return $array;
		 
		 
		 
		 
		 
	}
	 
	
}