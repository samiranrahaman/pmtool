<?php
/*
    Description : Model for User
    Author      : samiran
    Date        : 28/10/2016
*/
class Adminuser_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    } 
    
	public function post_add_user($firstname,$lastname,$phone1,$email,$user_type,$username,$password)
	{
		$sql1="SELECT * FROM  `pm_admin` where admin_username='".$username."'";
		 $query1= $this->db->query($sql1);
		 if($query1->num_rows()>0 )
		 {
			return 0;
		 }
		 else
		 {
		 
		$data = array(
		 'admin_first_name' =>$firstname,
		  'admin_last_name' =>$lastname,
		   'admin_mobile_number' =>$phone1,
			'admin_email_id' =>$email,
			'admin_role_id' =>$user_type,
			'admin_username' =>$username,
			'admin_password' =>md5($password),
			'adminadmin_status'=>1,
		);
		$this->db->insert('pm_admin', $data);
		$id=$this->db->insert_id() ; 
		 return $id;
		 }

		
		
	}
	public function update_add_user($firstname,$lastname,$phone1,$email,$user_type,$user_id)
	{
		if($user_id!=1)
		{
			
		$data = array(
		 'admin_first_name' =>$firstname,
		  'admin_last_name' =>$lastname,
		   'admin_mobile_number' =>$phone1,
			'admin_email_id' =>$email,
			'admin_role_id' =>$user_type,
			
		);
        $this->db->where('admin_id',$user_id);
		$this->db->update('pm_admin', $data);
		return 1;
		}
		else
		{
			return 0;
		}
		
	}
	
	
	public function get_user_list()
	{
		    $sql1="SELECT * from pm_admin where admin_role_id >0";
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	public function get_idea_user_list()
	{
		    $sql1="SELECT a.admin_id 'id' ,concat(a.admin_first_name,' ',a.admin_last_name) 'name' 
			from
			pm_admin a
			inner join 
			pm_authorization_rule b
			on a.admin_role_id=b.role_id
			where admin_role_id >0 and b.resource_id like '%IdeasManageUser%' ";
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	public function get_designer_user_list()
	{
		    $sql1="SELECT a.admin_id 'id' ,concat(a.admin_first_name,' ',a.admin_last_name) 'name' 
			from
			pm_admin a
			inner join 
			pm_authorization_rule b
			on a.admin_role_id=b.role_id
			where admin_role_id >0 and b.resource_id like '%DesignManageUser%' ";
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	
	public function get_copy_user_list()
	{
		    $sql1="SELECT a.admin_id 'id' ,concat(a.admin_first_name,' ',a.admin_last_name) 'name' 
			from
			pm_admin a
			inner join 
			pm_authorization_rule b
			on a.admin_role_id=b.role_id
			where admin_role_id >0 and b.resource_id like '%CopyWriteManageUser%' ";
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	public function get_uploader_user_list()
	{
		    $sql1="SELECT a.admin_id 'id' ,concat(a.admin_first_name,' ',a.admin_last_name) 'name' 
			from
			pm_admin a
			inner join 
			pm_authorization_rule b
			on a.admin_role_id=b.role_id
			where admin_role_id >0 and b.resource_id like '%UploadManageUser%' ";
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	public function edit_user_details($id)
	{
		     $sql1="SELECT 	* FROM  `pm_admin` where admin_id=".$id;
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	public function user_status($id)
	{
		 $sql1="SELECT 	* FROM  `pm_admin` where admin_id=".$id;
		 $query1= $this->db->query($sql1);
		
		 if($query1->row()->adminadmin_status>0)
		 {
		 $sql1="update `pm_admin` set adminadmin_status=0 where admin_id=".$id;
		 $query1= $this->db->query($sql1);
		 return 1;
		 }
		 else
		 {
		$sql1="update `pm_admin` set adminadmin_status=1 where admin_id=".$id;
		$query1= $this->db->query($sql1);
		return 1;
		 }
		 
		
	}
	public function user_delete($id)
	{
		  $sql1="delete FROM  `pm_admin` where admin_id=".$id;
		$query1= $this->db->query($sql1);
	   return 1;
	}
}