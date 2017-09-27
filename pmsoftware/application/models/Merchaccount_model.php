<?php
/*
    Description : Model for User
    Author      : samiran
    Date        : 28/10/2016
*/
class Merchaccount_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    } 
    
	public function post_add_user($name)
	{
		$sql1="SELECT * FROM  `pm_merch` where name='".$name."'";
		 $query1= $this->db->query($sql1);
		 if($query1->num_rows()>0 )
		 {
			return 0;
		 }
		 else
		 {
		 
		$data = array(
		 'name' =>$name,  
		);
		$this->db->insert('pm_merch', $data);
		$id=$this->db->insert_id() ;  
		 return $id;
		 }

		
		
	}
	public function update_add_merch($name,$id)
	{
		
		        $data = array(
				 'name' =>$name,
				);
					
				$this->db->where('id',$id);
				$this->db->update('pm_merch', $data);
				
	           return 1;
		
	}
	
	
	public function get_user_list()
	{
		    $sql1="SELECT * from  pm_merch";
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	
	
	
	
	
	public function edit_merch_details($id)
	{
		     $sql1="SELECT 	* FROM  `pm_merch` where id=".$id;
		 $query1= $this->db->query($sql1);
	     return $query_res1=$query1->result();
	}
	
	public function merch_delete($id)
	{
		  $sql1="delete FROM  `pm_merch` where id=".$id;
		$query1= $this->db->query($sql1); 
	   return 1;
	}
}