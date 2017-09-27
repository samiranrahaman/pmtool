<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
       <!-- <div class="pull-left info">-->
          <?php 
		  /* echo $user_info[0]->admin_first_name.' '.$user_info[0]->admin_last_name;
		 
		  if($user_info[1]['user']=='admin')
		  {
			 
			  $resource_array=array('all');
		  }
		  else
			{
			 $resource_array= json_decode($user_info[1]['resource_id']);
			 
			
			} */
			
		  ?>
         
        <!--</div>
        <br/>
        <br/>-->
		<?php 
		 if($user_info[1]['user']=='admin')
		  {
			 
			  $resource_array=array('all');
		  }
		  else
			{
			 $resource_array= json_decode($user_info[1]['resource_id']);
			 
			
			}
		?>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
     <?php   $REQUEST_URI=$_SERVER['REQUEST_URI'];
	 //echo $_SERVER['QUERY_STRING'];
	 ?>
			 <li class="active treeview" >

  			  <a href="#">
  				<i class="fa fa-dashboard"></i> <span style="font-size: 17px;font-weight: 700;">Tools</span> <i class="fa fa-angle-left pull-right"></i>
  			  </a>
			   <ul class="treeview-menu">
			   <li><a id="Dashboard" href="<?php echo base_url();?>index.php/dashboard" <?php if($REQUEST_URI=='/pmsoftware/index.php/dashboard'){?> class="active" <?php }?>><i class="fa fa-dashboard "></i>Dashboard</a>
			   </li>
			   
			   <li class="treeview" id="Setting">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					
					  <ul <?php if(!(in_array('all',$resource_array) ||  in_array('ManageRole',$resource_array) || in_array('ManageSubAdmin',$resource_array))){ echo "style='display:none'";}?>class="treeview-menu">
					  
					  <li><a id="role" <?php if($REQUEST_URI=='/pmsoftware/index.php/adminroles'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/adminroles"><i class="fa fa-dashboard "></i>Administrators Roles</a>
			          </li>
					   <li><a id="adminuser" <?php if($REQUEST_URI=='/pmsoftware/index.php/adminuser'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/adminuser"><i class="fa fa-dashboard "></i>Administrators Users</a>
			        </li>
					  
					  <li><a id="merchaccount" <?php if($REQUEST_URI=='/pmsoftware/index.php/merchaccount'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/merchaccount"><i class="fa fa-dashboard "></i>Merch Accounts</a>
			        </li>
					  
					    <!--<li <?php if(!(in_array('all',$resource_array) ||  in_array('ManageRole',$resource_array))){ echo "style='display:none'";}?>><a id="role" <?php if($REQUEST_URI=='/pmsoftware/index.php/adminroles'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/adminroles"><i class="fa fa-dashboard "></i>Administrators Roles</a>
			          </li>
					   <li <?php if(!(in_array('all',$resource_array) || in_array('ManageSubAdmin',$resource_array))){ echo "style='display:none'";}?>><a id="adminuser" <?php if($REQUEST_URI=='/pmsoftware/index.php/adminuser'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/adminuser"><i class="fa fa-dashboard "></i>Administrators Users</a>
			        </li>-->
					
					 </ul> 	
				</li>
			   
			   
			   
			   
			  
			   
			   
			   
			    <li <?php if(!(in_array('all',$resource_array) || in_array('IdeasManageUser',$resource_array))){ echo "style='display:none'";}?>><a id="ideas"  <?php if($REQUEST_URI=='/pmsoftware/index.php/createproduct/idea_list'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/createproduct/idea_list"><i class="fa fa-dashboard "></i>Ideas</a>
			   </li>
			   
			   <li <?php if(!(in_array('all',$resource_array) || in_array('DesignManageUser',$resource_array))){ echo "style='display:none'";}?>><a id="design"  <?php if($REQUEST_URI=='/pmsoftware/index.php/createproduct/design_todo_list'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/createproduct/design_todo_list"><i class="fa fa-dashboard "></i>Design</a>
			   </li>
			   
			    <li <?php if(!(in_array('all',$resource_array) || in_array('CopyWriteManageUser',$resource_array))){ echo "style='display:none'";}?>><a id="copy" <?php if($REQUEST_URI=='/pmsoftware/index.php/createproduct/copy_todo_list'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/createproduct/copy_todo_list"><i class="fa fa-dashboard "></i>Copywriting</a>
			   </li>
			   
			    <li <?php if(!(in_array('all',$resource_array) || in_array('UploadManageUser',$resource_array))){ echo "style='display:none'";}?>><a id="upload" <?php if($REQUEST_URI=='/pmsoftware/index.php/createproduct/upload_todo_list'){?> class="active" <?php }?>  href="<?php echo base_url();?>index.php/createproduct/upload_todo_list"><i class="fa fa-dashboard "></i>Upload/Status</a>
			   </li>
			   <!--<li ><a <?php if($REQUEST_URI=='/pmsoftware/index.php/createproduct/masterview_list'){?> class="active" <?php }?> href="<?php echo base_url();?>index.php/createproduct/masterview_list"><i class="fa fa-dashboard "></i>Master View</a></li>-->
			   
			   </ul>
  			  <!--<ul class="treeview-menu">
			   
                <li><a href="<?php echo base_url();?>index.php/dashboard"><i class="fa fa-dashboard "></i>Dashboard</a></li>
				
				 <li <?php if(!(in_array('all',$resource_array) ||  in_array('ManageRole',$resource_array))){ echo "style='display:none'";}?> class="active treeview">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Administrators Roles</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					
					  <ul class="treeview-menu">
					   <li><a href="<?php echo base_url();?>index.php/adminroles"><i class="fa fa-dashboard "></i>Roles</a></li>
					   <li><a href="<?php echo base_url();?>index.php/adminroles/add_role"><i class="fa fa-dashboard "></i>Add New Role</a></li>
					
					 </ul> 	
				</li>
				<li <?php if(!(in_array('all',$resource_array) || in_array('ManageSubAdmin',$resource_array))){ echo "style='display:none'";}?> class="active treeview">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Administrators Users</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					
					  <ul class="treeview-menu">
					   <li><a href="<?php echo base_url();?>index.php/adminuser"><i class="fa fa-dashboard "></i>Users List</a></li>
					   <li><a href="<?php echo base_url();?>index.php/adminuser/add_user"><i class="fa fa-dashboard "></i>Add New</a></li>
					
					 </ul> 	
				</li>
				
				
				
				<li <?php if(!(in_array('all',$resource_array) || in_array('IdeasManageUser',$resource_array))){ echo "style='display:none'";}?> class="active treeview">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Ideas</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					
					  <ul class="treeview-menu">
					   <li><a href="<?php echo base_url();?>index.php/createproduct"><i class="fa fa-dashboard "></i>Add</a></li>
					   <li><a href="<?php echo base_url();?>index.php/createproduct/idea_list"><i class="fa fa-dashboard "></i>Review</a></li>
					
					 </ul> 	
				</li>
			  
			  <li <?php if(!(in_array('all',$resource_array) || in_array('DesignManageUser',$resource_array))){ echo "style='display:none'";}?> class="active treeview">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Design</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					
					  <ul class="treeview-menu">
					   <li><a href="<?php echo base_url();?>index.php/createproduct/design_todo_list"><i class="fa fa-dashboard "></i>To Do</a></li>
					   <li><a href="<?php echo base_url();?>index.php/createproduct/design_list"><i class="fa fa-dashboard "></i>Review</a></li>
					
					 </ul> 	
				</li>
			  
			  <li <?php if(!(in_array('all',$resource_array) || in_array('CopyWriteManageUser',$resource_array))){ echo "style='display:none'";}?> class="active treeview">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Copy Writing</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					
					  <ul class="treeview-menu">
					   <li><a href="<?php echo base_url();?>index.php/createproduct/copy_todo_list"><i class="fa fa-dashboard "></i>To Do</a></li>
					   <li><a href="<?php echo base_url();?>index.php/createproduct/copy_list"><i class="fa fa-dashboard "></i>Review</a></li>
					 
					 </ul> 	
				</li>
			  
			  <li  <?php if(!(in_array('all',$resource_array) || in_array('UploadManageUser',$resource_array))){ echo "style='display:none'";}?> class="active treeview">

					  <a href="#">
						<i class="fa fa-dashboard"></i> <span>Upload/Status</span> <i class="fa fa-angle-left pull-right"></i>
					  </a>
					  
					  <ul class="treeview-menu">
					    <li><a href="<?php echo base_url();?>index.php/createproduct/upload_todo_list"><i class="fa fa-dashboard "></i>To Do</a></li>
					   <li><a href="<?php echo base_url();?>index.php/createproduct/upload_product_list"><i class="fa fa-dashboard "></i>Review</a></li>
					  
					 </ul> 	
				</li>
			   <li ><a href="<?php echo base_url();?>index.php/createproduct/masterview_list"><i class="fa fa-dashboard "></i>Master View</a></li> 
			  
			   
				
			
			 </ul> -->	
			 </li>
		</ul>
    </section>
    <!-- /.sidebar -->
  </aside>