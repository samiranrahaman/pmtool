<div class="content-wrapper" ng-init='init()' ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Upload Product Phase</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">UploadProduct</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
       <!--<a href="<?php echo base_url();?>manageaccount/payment_list"><h4>Payment List</h4></a> -->
	<div class="container">
			<div class="row row-centered">
			   <?php  //echo"<pre>";print_r($data);?>
			   
			   <div class="row">
		                                <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                   <ul class="nav nav-tabs" role="tablist">
                                        <!--<li role="presentation"  class="active" ><a  href="<?php echo base_url();?>index.php/createproduct/upload_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>-->
                                         <li role="presentation" class="active" ><a  href="<?php echo base_url();?>index.php/createproduct/upload_product_list" aria-controls="profile" role="tab" > Review</a>										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">		
										<div class="row row_custom" >																		   <div class="col-xs-6 col-centered col-min">
										<img src="<?php echo base_url();?><?php echo $data[0]->drive_link_to_png ;?>" style="width:74%;"/>	
										
										
										</div>										
										<div class="col-xs-6 col-centered col-min">	
												
										<p><b>T-shirt ID: </b>T0<?php echo $data[0]->id ;?></p>
												
										<p><b>IdeaUrl:</b> 
										<a href="http://<?php echo $data[0]->idea_url ;?>" target="_blank"><?php echo $data[0]->idea_url ;?></a>
										</p>											   																						
										<?php if($data[0]->Priority==1) {?>
										<p><span style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">A+</span></p>						
										<?php } ?>										
										<?php if($data[0]->Priority==2) {?>
										<p><span style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">A</span></p>												<?php } ?>						
										<?php if($data[0]->Priority==3) {?>																								<p><span style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">B</span></p>												<?php } ?>					
										<?php if($data[0]->Priority==4) {?>
										<p><span style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">C</span>												</p>										
										<?php } ?>							
										<?php if($data[0]->Priority==5) {?>
										<p><span style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">D </span></p>			
										<?php } ?>			
										<?php if($data[0]->Priority==6) {?>
										<p> <span style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">E </span></p>				
										<?php } ?>												
										<?php if($data[0]->Priority==7) {?>			
										<p><span style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">F</span></p>		
										<?php } ?>												
										<p><b>P-Keyword:</b> <?php echo $data[0]->Primaryword;?></p>			
										<p><b>S-Keyword:</b> <?php echo $data[0]->Secondaryword;?></p>
										
										<p><b>Note:</b> <?php echo $data[0]->Notes;?></p>
										<?php if($data[0]->design_level==1) {?>	
											<p><b>Level:</b> Level1</p>
										<?php } ?>
										<?php if($data[0]->design_level==2) {?>	
											<p><b>Level:</b> Level2</p>
										<?php } ?>
										<?php if($data[0]->design_level==3) {?>	
											<p><b>Level:</b> Level3</p>
										<?php } ?>
											 

										<p><b>Brand Name:</b> <?php echo $data[0]->Brand_Name;?></p>
										<p><b>Title:</b> <?php echo $data[0]->Title;?></p>
										<p><b>Price:</b> <?php echo $data[0]->Price;?></p>

											<p><b>Bullet1: </b><?php echo $data[0]->Bullet1 ;?></p>
												<p><b>Bullet2: </b><?php echo $data[0]->Bullet1 ;?></p>
												
												<p><b>Description: </b><?php echo $data[0]->Product_description ;?></p>
										 <p><b>Notes: </b><?php echo $data[0]->Notes ;?></p>
										  <p><b>Niche Tags: </b><?php echo $data[0]->Niche_tags ;?></p>
										<p>
   											   <div class="foo2" style="background: #<?php echo $data[0]->color1 ?>;"></div>
													<div class="foo2" style="background: #<?php echo $data[0]->color2 ?>;"></div>
													<div class="foo2" style="background: #<?php echo $data[0]->color3 ?>;"></div>
													<div class="foo2" style="background: #<?php echo $data[0]->color4 ?>;"></div>
													<div class="foo2" style="background: #<?php echo $data[0]->color5 ?>;"></div>
											
											</p>
										
										</div>
										</div>										
										
										
										
										
										<div class="row" style="margin-top: 34px;">
										
										<div class="col-xs-12 col-centered col-min">
										<form  id="createproduct" name="createproduct" ng-submit="productform()" novalidate >
				<input type="hidden" class="form-control"  id="id" name="id" ng-model="id" ng-value="id" required>
					<div class="col-xs-6 col-centered col-min">
						
						
						<?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.Uploader_man.$invalid && !createproduct.Uploader_man.$pristine }">
					  
								<label for="sel1">Product Uploader:</label>
								
							 <select class="form-control" id="Uploader_man" name="Uploader_man"  required ng-model="Uploader_man"
								ng-options="opt.id as opt.name for opt in userlist">
							</select>
							
						<p ng-show="createproduct.Uploader_man.$invalid && !createproduct.Uploader_man.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  type="hidden" class="form-control"  id="Uploader_man" name="Uploader_man" ng-model="Uploader_man" ng-value="Uploader_man" required>
					
					<?php }?>
						
						 <div class="form-group"  ng-class="{ 'has-error' : createproduct.Upload_status.$invalid && !createproduct.Upload_status.$pristine }">
					  
								<label for="sel1">Merch by Amazon Account:</label>
								
							 <select class="form-control" id="Upload_status" name="Upload_status"  required ng-model="Upload_status"
								ng-options="opt.id as opt.name for opt in amazon_merch1">
							</select>
							
						<p ng-show="createproduct.Upload_status1.$invalid && !createproduct.Upload_status1.$pristine" class="help-block">Field is required.</p>
					    </div>
					
					</div>
					 <div class="col-xs-6 col-centered col-min">
					    
						
						<?php // if($user_info[0]->admin_id==1) { ?>
					     
						
						<!--<div class="form-group"  ng-class="{ 'has-error' : createproduct.Upload_status2.$invalid && !createproduct.Upload_status2.$pristine }">
					  
								<label for="sel1">Merch by Amazon Account 2:</label>
								
							 <select class="form-control" id="Upload_status2" name="Upload_status2"  required ng-model="Upload_status2"
								ng-options="opt.id as opt.name for opt in amazon_merch1">
							</select>
							
						<p ng-show="createproduct.Upload_status2.$invalid && !createproduct.Upload_status2.$pristine" class="help-block">Field is required.</p>
					    </div>
						-->
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.Upload_status3.$invalid && !createproduct.Upload_status3.$pristine }">
					  
								<label for="sel1">Redbubble:</label>
								
							 <select class="form-control" id="Upload_status3" name="Upload_status3"  required ng-model="Upload_status3"
								ng-options="opt.id as opt.name for opt in amazon_merch1">
							</select>
							
						<p ng-show="createproduct.Upload_status3.$invalid && !createproduct.Upload_status3.$pristine" class="help-block">Field is required.</p>
					    </div>
						
					<?php /* } else { ?>
					
					     <input  ng-init="Idea_status=1" type="hidden" class="form-control"  id="Upload_status" name="Upload_status" ng-model="Upload_status" ng-value="Upload_status" required>
					
					<?php } */?>
					
					   
					   <?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.upload_final_status.$invalid && !createproduct.upload_final_status.$pristine }">
					  
								<label for="sel1">Final Status: </label>
								
							 <select class="form-control" id="upload_final_status" name="upload_final_status"  required ng-model="upload_final_status"
								ng-options="opt.id as opt.name for opt in upload_final_status_list">
							</select>
							
						<p ng-show="createproduct.upload_final_status.$invalid && !createproduct.upload_final_status.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  ng-init="upload_final_status=1" type="hidden" class="form-control"  id="upload_final_status" name="upload_final_status" ng-model="upload_final_status" ng-value="upload_final_status" required>
					
					<?php }?>
					
					
					  <div class="form-group" style="margin-top: 19px;">
						<div class="col-xs-4 pull-right">
								
								<button type="submit" class="btn btn-primary" ng-disabled="createproduct.$invalid">Upload Product </button>
					   </div>
					  </div>
					  </div>
				</form>
									   </div>
										
										</div>
										</div>
											</div>
											</div>
								</div>
						
						
						
						
						
						 
			</div>
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
					
			   
			</div>
    </div>
	
    </section>
    <!-- /.content -->
  </div>
 <script>
 var app=angular.module("myApp",[]);
 app.controller('productidea',function($scope,$http){
	 $scope.init=function()
	 {
							  $scope.amazon_merch1=[
		 {
			id:'1' ,
			name:'Draft'  
		 },
		 {
			id:'2' ,
			name:'Live'  
		 },
		 {
			id:'3' ,
			name:'Rejected'  
		 },
		 {
			id:'4' ,
			name:'Removed'  
		 },
		 {
			id:'5' ,
			name:'Deleted'  
		 },
		  {
			id:'6' ,
			name:'Private'  
		 }
		 ]; 
		 
		 $scope.upload_final_status_list=[
		 {
			id:'1' ,
			name:'Save Draft'  
		 },
		 /* {
			id:'2' ,
			name:'Worning'  
		 }, */
		 {
			id:'3' ,
			name:'Ready for Upload'  
		 }
		 ];
							    $scope.id='<?php echo $data[0]->id;?>';
								
								//$scope.Uploader_man='<?php echo $data[0]->Uploader_man;?>';
								
								var userid=<?php echo $user_info[0]->admin_id;?>;
								var Uploader_man='<?php echo $data[0]->Uploader_man;?>';
								/* alert (userid);
								alert (Uploader_man); */
								
								if(Uploader_man==0 && userid >1)
								{
									//alert(1);
									$scope.Uploader_man=userid;								$scope.Upload_status=1;								$scope.Upload_status2=1;								$scope.Upload_status3=1;
								}            
								else if(Uploader_man==0 && userid ==1)							
									{	
								
								
								$scope.Upload_status='1';		
								$scope.Upload_status2='1';			
								$scope.Upload_status3='1';								
								
								}
								
								else
								{	//alert(3);
									$scope.Uploader_man=Uploader_man;									$scope.Upload_status='<?php echo $data[0]->Upload_status;?>';								$scope.Upload_status2='<?php echo $data[0]->Upload_status2;?>';								$scope.Upload_status3='<?php echo $data[0]->Upload_status3;?>';									
								}
								
								
								
								/* $scope.Upload_status='<?php echo $data[0]->Upload_status;?>';
								$scope.Upload_status2='<?php echo $data[0]->Upload_status2;?>';
								$scope.Upload_status3='<?php echo $data[0]->Upload_status3;?>'; */
								 
								
								/* if(userid >1 && Upload_status==0)
								{
									$scope.Upload_status=1;
								}
								else 
								{
									$scope.Upload_status='<?php echo $data[0]->Upload_status;?>';
								} */
								
		 
		 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/adminuser/get_uploader_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.userlist=data;
			 });
		 
		 
		 
		 
		 
		  
		 
		 
		 
		 
			
	}
	 
		 
		 
	  $scope.productform=function()
	 {
		 
		 $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/createproduct/update_product_upload_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({Uploader_man:$scope.Uploader_man,
								   Upload_status:$scope.Upload_status,
								  // Upload_status2:$scope.Upload_status2,
								   Upload_status2:'',  
								   Upload_status3:$scope.Upload_status3,
									id:$scope.id,
							   
							   
							   })
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 //window.location.href="<?php echo base_url();?>index.php/createproduct/upload_product_list";					 window.location.href="<?php echo base_url();?>index.php/createproduct/upload_todo_list";
 window.location.href="<?php echo base_url();?>index.php/createproduct/upload_todo_list";					 
				 } 
		 })
	 }
	 
 });
 
 </script>
 <script>
var d = document.getElementById("upload");
d.className += " active";
</script>