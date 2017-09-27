<div class="content-wrapper" ng-init='init()' ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Copywrite Phase</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">CopywriteAdd</li>
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
                                        <li role="presentation" class="active"  ><a  href="<?php echo base_url();?>index.php/createproduct/copy_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation"><a  href="<?php echo base_url();?>index.php/createproduct/copy_list" aria-controls="profile" role="tab" > Review</a>
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
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.Copy_Writer.$invalid && !createproduct.Copy_Writer.$pristine }">
					  
								<label for="sel1">Copy Writer :</label>
								
							 <select class="form-control" id="Copy_Writer" name="Copy_Writer"  required ng-model="Copy_Writer"
								ng-options="opt.id as opt.name for opt in userlist">
							</select>
							
						<p ng-show="createproduct.Copy_Writer.$invalid && !createproduct.Copy_Writer.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  type="hidden" class="form-control"  id="Copy_Writer" name="Copy_Writer" ng-model="Copy_Writer" ng-value="Copy_Writer" required>
					
					<?php }?>
						
						
						
						
						
						
						
						
						
					    <div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Brand_Name.$invalid && !createproduct.Brand_Name.$pristine }">
							<label for="sel1">Brand Name :</label>
							<input type="text" class="form-control" placeholder="Brand Name" id="Brand_Name" name="Brand_Name" ng-model="Brand_Name" required> 
							<p ng-show="createproduct.Brand_Name.$invalid && !createproduct.Brand_Name.$pristine" class="help-block">Field is required.</p>
							
						</div> 
					  
						<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Title.$invalid && !createproduct.Title.$pristine }">
							<label for="sel1">Title :</label>
							<input type="text" class="form-control" placeholder="Title" id="Title" name="Title" ng-model="Title" required> 
							<p ng-show="createproduct.Title.$invalid && !createproduct.Title.$pristine" class="help-block">Field is required.</p>
							
						</div>

						
						<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Price.$invalid && !createproduct.Price.$pristine }">
							<label for="sel1">Price:</label>
							<input type="text" class="form-control" placeholder="Price" id="Price" name="Price" ng-model="Price" required> 
							<p ng-show="createproduct.Price.$invalid && !createproduct.Price.$pristine" class="help-block">Field is required.</p>
						</div>
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.Bullet1.$invalid && !createproduct.Bullet1.$pristine }">
					  
								<label for="sel1">Bullet 1 :</label>
								<textarea cols="30" rows="5" maxlength="150" class="form-control" id="Bullet1" name="Bullet1"  ng-model="Bullet1"></textarea>
							 
							
						<p ng-show="createproduct.Bullet1.$invalid && !createproduct.Bullet1.$pristine" class="help-block">Field is required.</p>
					    </div>
					
					</div>
					 <div class="col-xs-6 col-centered col-min">
					    
						
						
						
						
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.Bullet2.$invalid && !createproduct.Bullet2.$pristine }">
					  
								<label for="sel1">Bullet 2 :</label>
								<textarea class="form-control" id="Bullet2" name="Bullet2"  maxlength="150"  ng-model="Bullet2"></textarea>
							 
							
						<p ng-show="createproduct.Bullet2.$invalid && !createproduct.Bullet2.$pristine" class="help-block">Field is required.</p>
					    </div>
						
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.Product_description.$invalid && !createproduct.Product_description.$pristine }">
					  
								<label for="sel1">Product Description :</label>
								<textarea class="form-control" maxlength="150"  id="Product_description" name="Product_description"  ng-model="Product_description"></textarea>
							 
							
						<p ng-show="createproduct.Product_description.$invalid && !createproduct.Product_description.$pristine" class="help-block">Field is required.</p>
					    </div>
						
						
						
						
						
						
						
						
						
						<?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.Copy_status.$invalid && !createproduct.Copy_status.$pristine }">
					  
								<label for="sel1">Status:</label>
								
							 <select class="form-control" id="Copy_status" name="Copy_status"  required ng-model="Copy_status"
								ng-options="opt.id as opt.name for opt in Copy_status_list">
							</select>
							
						<p ng-show="createproduct.Copy_status.$invalid && !createproduct.Copy_status.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  ng-init="Idea_status=1" type="hidden" class="form-control"  id="Copy_status" name="Copy_status" ng-model="Copy_status" ng-value="Copy_status" required>
					
					<?php }?>
					
					  <div class="form-group" style="margin-top: 19px;">
						<div class="col-xs-4 pull-right">
								
								<button type="submit" class="btn btn-primary" ng-disabled="createproduct.$invalid">Add Copy</button>
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
							   
							    $scope.id='<?php echo $data[0]->id;?>';
								
								//$scope.Copy_Writer='<?php echo $data[0]->Copy_Writer;?>';
								
								var userid=<?php echo $user_info[0]->admin_id;?>;
								var Copy_Writer='<?php echo $data[0]->Copy_Writer;?>';
								//alert (userid);
								//alert (design_man_id);
								
								if(Copy_Writer==0 && userid >1)
								{
									//alert(1);
									$scope.Copy_Writer=userid;
								}
								
								else
								{
									$scope.Copy_Writer=Copy_Writer;
								}
								
								
								$scope.Brand_Name='<?php echo $data[0]->Brand_Name;?>';
								$scope.Title='<?php echo $data[0]->Title;?>';
								$scope.Price='<?php echo $data[0]->Price;?>';
								$scope.Bullet1='<?php echo $data[0]->Bullet1;?>';
								
								$scope.Bullet2='<?php echo $data[0]->Bullet2;?>';
								$scope.Product_description='<?php echo $data[0]->Product_description;?>';
								//$scope.Copy_status='<?php echo $data[0]->Copy_status;?>';
								
								var Copy_status='<?php echo $data[0]->Copy_status;?>';
								
								
								if(userid >1 && Copy_status==0)
								{
									$scope.Copy_status=1;
								}
								else 
								{
									$scope.Copy_status='<?php echo $data[0]->Copy_status;?>';
								}
								
		 
		 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/adminuser/get_copy_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.userlist=data;
			 });
		 
		 
		 
		 
		 
		  $scope.Copy_status_list=[
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
		 
		 
		 
		 
			
	}
	 
		 
		 
	  $scope.productform=function()
	 {
		 
		 $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/createproduct/update_product_copy_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({Copy_Writer:$scope.Copy_Writer,
							   Brand_Name:$scope.Brand_Name,
							    Title:$scope.Title,
								 Price:$scope.Price,
								  Bullet1:$scope.Bullet1,
								   Bullet2:$scope.Bullet2,
								   Product_description:$scope.Product_description,
								   Copy_status:$scope.Copy_status,
									id:$scope.id,
							   
							   
							   })
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 window.location.href="<?php echo base_url();?>index.php/createproduct/copy_list";
				 } 
		 })
	 }
	 
 });
 
 </script>