<script src="<?php echo base_url();?>js/jscolor.js"></script>
<div class="content-wrapper" ng-init='init()' ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Design Phase</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">DesignAdd</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
       <!--<a href="<?php echo base_url();?>manageaccount/payment_list"><h4>Payment List</h4></a> -->
	<div class="container">
			<div class="row row-centered">
			
			<div class="row">
		                                <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li role="presentation"  class="active" ><a  href="<?php echo base_url();?>index.php/createproduct/design_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation" ><a  href="<?php echo base_url();?>index.php/createproduct/design_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										<div class="row">
										
										<div class="col-xs-12 col-centered col-min">
										<form  id="createproduct" name="createproduct" ng-submit="productform()" novalidate >
				<input type="hidden" class="form-control"  id="id" name="id" ng-model="id" ng-value="id" required>
					<div class="col-xs-6 col-centered col-min">
						
						
						<?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.design_man.$invalid && !createproduct.design_man.$pristine }">
					  
								<label for="sel1">Designer Man:</label>
								
							 <select class="form-control" id="design_man" name="design_man"  required ng-model="design_man"
								ng-options="opt.id as opt.name for opt in userlist">
							</select>
							
						<p ng-show="createproduct.design_man.$invalid && !createproduct.design_man.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  type="hidden" class="form-control"  id="design_man" name="design_man" ng-model="design_man" ng-value="design_man" required>
					
					<?php }?>
						
						
						
						
						
						
						
						
						
					    <div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.proof_me_link.$invalid && !createproduct.proof_me_link.$pristine }">
							<label for="sel1">Proof me Link :</label>
							<input type="text" class="form-control" placeholder="Proof me Link" id="proof_me_link" name="proof_me_link" ng-model="proof_me_link" required> 
							<p ng-show="createproduct.proof_me_link.$invalid && !createproduct.proof_me_link.$pristine" class="help-block">Field is required.</p>
							
						</div> 
					  
						<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.fileinfo.$invalid && !createproduct.fileinfo.$pristine }">
							<label for="sel1">File Name/Number:</label>
							<input type="text" class="form-control" placeholder="File Name/Number" id="fileinfo" name="fileinfo" ng-model="fileinfo" required> 
							<p ng-show="createproduct.fileinfo.$invalid && !createproduct.fileinfo.$pristine" class="help-block">Field is required.</p>
							
						</div> 
						<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.drive_link_to_png.$invalid && !createproduct.drive_link_to_png.$pristine }">
							<label for="sel1">Drive Link to PNG :</label>
							<input type="text" class="form-control" placeholder="Drive Link to PNG" id="drive_link_to_png" name="drive_link_to_png" ng-model="drive_link_to_png" required> 
							<p ng-show="createproduct.drive_link_to_png.$invalid && !createproduct.drive_link_to_png.$pristine" class="help-block">Field is required.</p>
						</div>
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.design_level.$invalid && !createproduct.design_level.$pristine }">
					  
								<label for="sel1">Design Level :</label>
								
							 <!--<select class="form-control" id="design_level" name="design_level"  required ng-model="design_level"
								ng-options="opt.id as opt.name for opt in design_level_list">
							</select>-->
							<input type="radio" ng-model="design_level" value="1">Level1
							  <input type="radio" ng-model="design_level" value="2">Level2
							  <input type="radio" ng-model="design_level" value="3">Level3
							
						<p ng-show="createproduct.design_level.$invalid && !createproduct.design_level.$pristine" class="help-block">Field is required.</p>
					    </div>
					
					</div>
					 <div class="col-xs-6 col-centered col-min">
					    
						
						
						
						
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.color1.$invalid && !createproduct.color1.$pristine }">
					  
								<label for="sel1">Color1 to Use :</label>
								
							<!-- <select class="form-control" id="color1" name="color1"  required ng-model="color1"
								ng-options="opt.id as opt.name for opt in color_list">
							</select>-->
							 <input class="jscolor form-control" name="color1" ng-model="color1" value="ab2567">


							
						<p ng-show="createproduct.color1.$invalid && !createproduct.color1.$pristine" class="help-block">Field is required.</p>
					    </div>
						
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.color2.$invalid && !createproduct.color2.$pristine }">
					  
								<label for="sel1">Color2 to Use :</label>
								
							 <!--<select class="form-control" id="color2" name="color2"   ng-model="color2"
								ng-options="opt.id as opt.name for opt in color_list">
							</select>-->
							<input class="jscolor form-control" name="color2" ng-model="color2" value="ab2567">
							
						<p ng-show="createproduct.color2.$invalid && !createproduct.color2.$pristine" class="help-block">Field is required.</p>
					    </div>
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.color3.$invalid && !createproduct.color3.$pristine }">
					  
								<label for="sel1">Color3 to Use :</label>
								
							 <!--<select class="form-control" id="color3" name="color3"   ng-model="color3"
								ng-options="opt.id as opt.name for opt in color_list">
							</select>-->
							<input class="jscolor form-control" name="color3" ng-model="color3" value="ab2567">
							
						<p ng-show="createproduct.color3.$invalid && !createproduct.color3.$pristine" class="help-block">Field is required.</p>
					    </div>
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.color4.$invalid && !createproduct.color4.$pristine }">
					  
								<label for="sel1">Color4 to Use :</label>
								
							 <!--<select class="form-control" id="color3" name="color3"   ng-model="color3"
								ng-options="opt.id as opt.name for opt in color_list">
							</select>-->
							<input class="jscolor form-control" name="color4" ng-model="color4" value="ab2567">
							
						<p ng-show="createproduct.color4.$invalid && !createproduct.color4.$pristine" class="help-block">Field is required.</p>
					    </div>
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.color5.$invalid && !createproduct.color5.$pristine }">
					  
								<label for="sel1">Color5 to Use :</label>
								
							 <!--<select class="form-control" id="color3" name="color3"   ng-model="color3"
								ng-options="opt.id as opt.name for opt in color_list">
							</select>-->
							<input class="jscolor form-control" name="color5" ng-model="color5" value="ab2567">
							
						<p ng-show="createproduct.color5.$invalid && !createproduct.color5.$pristine" class="help-block">Field is required.</p>
					    </div>
						
						
						
						
						
						
						<?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.design_status.$invalid && !createproduct.design_status.$pristine }">
					  
								<label for="sel1">Status:</label>
								
							 <select class="form-control" id="design_status" name="design_status"  required ng-model="design_status"
								ng-options="opt.id as opt.name for opt in design_status_list">
							</select>
							
						<p ng-show="createproduct.design_status.$invalid && !createproduct.design_status.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  ng-init="Idea_status=1" type="hidden" class="form-control"  id="design_status" name="design_status" ng-model="design_status" ng-value="design_status" required>
					
					<?php }?>
					
					  <div class="form-group" style="margin-top: 19px;">
						<div class="col-xs-4 pull-right">
								
								<button type="submit" class="btn btn-primary" ng-disabled="createproduct.$invalid">Add Design </button>
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
	 {/* 
								$scope.ideaman='<?php echo $data[0]->idea_man;?>';
							   $scope.ideaurl='<?php echo $data[0]->idea_url;?>';
							  // $scope.BSR='<?php echo $data[0]->BSR;?>';
							   $scope.Priority='<?php echo $data[0]->Priority;?>';
							    $scope.TM_status='<?php echo $data[0]->TM_status;?>'; 
							   $scope.Primaryword='<?php echo $data[0]->Primaryword;?>';
							   $scope.Secondaryword='<?php echo $data[0]->Secondaryword;?>';
							   $scope.Niche_tags='<?php echo $data[0]->Niche_tags;?>';
							   $scope.Notes='<?php echo $data[0]->Notes;?>';
							   $scope.Idea_status='<?php echo $data[0]->Idea_status;?>';
							   $scope.id='<?php echo $data[0]->id;?>'; */
							   
							    $scope.id='<?php echo $data[0]->id;?>';
								var userid=<?php echo $user_info[0]->admin_id;?>;
								var design_man_id='<?php echo $data[0]->design_man;?>';
								//alert (userid);
								//alert (design_man_id);
								
								if(design_man_id==0 && userid >1)
								{
									//alert(1);
									$scope.design_man=userid;
								}
								/* if(design_man_id>0 && userid>1)
								{
									//alert(2);
									$scope.design_man=design_man_id;
								} */
								else
								{
									$scope.design_man=design_man_id;
								}
								
								
								
								
								$scope.proof_me_link='<?php echo $data[0]->proof_me_link;?>';
								$scope.fileinfo='<?php echo $data[0]->fileinfo;?>';
								$scope.drive_link_to_png='<?php echo $data[0]->drive_link_to_png;?>';
								$scope.design_level='<?php echo $data[0]->design_level;?>';
								
								$scope.color1='<?php echo $data[0]->color1;?>';
								$scope.color2='<?php echo $data[0]->color2;?>';
								$scope.color3='<?php echo $data[0]->color3;?>';
								$scope.color4='<?php echo $data[0]->color4;?>';
								$scope.color5='<?php echo $data[0]->color5;?>';
								
								
								var design_status='<?php echo $data[0]->design_status;?>';
								
								
								if(userid >1 && design_status==0)
								{
									$scope.design_status=1;
								}
								else 
								{
									$scope.design_status='<?php echo $data[0]->design_status;?>';
								}
								
		 
		 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/adminuser/get_designer_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.userlist=data;
			 });
		 
		 
		 
		 
		 $scope.design_level_list=[{
			id:'1' ,
			name:'Level1'
		 },
		 {
			id:'2' ,
			name:'Level2'  
		 },
		 {
			id:'3' ,
			name:'Level3'  
		 }
		 ];
		 
		  $scope.design_status_list=[
		 {
			id:'1' ,
			name:'Progress'  
		 },
		 /* {
			id:'2' ,
			name:'Worning'  
		 }, */
		 {
			id:'3' ,
			name:'Done'  
		 }
		 ];
		 
		 $scope.color_list=[
		 {
			id:'1' ,
			name:'Black'  
		 },
		 {
			id:'2' ,
			name:'Navy'  
		 },
		 {
			id:'3' ,
			name:'Grey'  
		 }
		 ];
		 
		 
			
	}
	 
		 
		 
	  $scope.productform=function()
	 {
		 
		 $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/createproduct/update_product_design_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({design_man:$scope.design_man,
							   proof_me_link:$scope.proof_me_link,
							    fileinfo:$scope.fileinfo,
								 drive_link_to_png:$scope.drive_link_to_png,
								  design_level:$scope.design_level,
								   color1:$scope.color1,
								   color2:$scope.color2,
								   color3:$scope.color3,
								    color4:$scope.color4,
									 color5:$scope.color5,
								    design_status:$scope.design_status,
									id:$scope.id,
							   
							   
							   })
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 window.location.href="<?php echo base_url();?>index.php/createproduct/design_list";
				 } 
		 })
	 }
	 
 });
 
 </script>