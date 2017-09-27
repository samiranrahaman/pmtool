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
			   <?php // echo"<pre>";print_r($data);?>
			   
			   <div class="row">
		                                <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                   <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"  class="active" ><a  href="<?php echo base_url();?>index.php/createproduct/upload_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation" ><a  href="<?php echo base_url();?>index.php/createproduct/upload_product_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										<div class="row">
										<p class="btn btn-primary" style="float: right; margin-right: 29px;color: #fff;"><a  target="_blank" href="<?php echo base_url();?>index.php/createproduct/get_preview/{{id}}" aria-controls="profile" role="tab" > Preview</a></p>
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
					  
								<label for="sel1">Merch by Amazon Account 1:</label>
								
							 <select class="form-control" id="Upload_status" name="Upload_status"  required ng-model="Upload_status"
								ng-options="opt.id as opt.name for opt in amazon_merch1">
							</select>
							
						<p ng-show="createproduct.Upload_status1.$invalid && !createproduct.Upload_status1.$pristine" class="help-block">Field is required.</p>
					    </div>
					
					</div>
					 <div class="col-xs-6 col-centered col-min">
					    
						
						<?php // if($user_info[0]->admin_id==1) { ?>
					     
						
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.Upload_status2.$invalid && !createproduct.Upload_status2.$pristine }">
					  
								<label for="sel1">Merch by Amazon Account 2:</label>
								
							 <select class="form-control" id="Upload_status2" name="Upload_status2"  required ng-model="Upload_status2"
								ng-options="opt.id as opt.name for opt in amazon_merch1">
							</select>
							
						<p ng-show="createproduct.Upload_status2.$invalid && !createproduct.Upload_status2.$pristine" class="help-block">Field is required.</p>
					    </div>
						
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
							    $scope.id='<?php echo $data[0]->id;?>';
								
								//$scope.Uploader_man='<?php echo $data[0]->Uploader_man;?>';
								
								var userid=<?php echo $user_info[0]->admin_id;?>;
								var Uploader_man='<?php echo $data[0]->Uploader_man;?>';
								//alert (userid);
								//alert (design_man_id);
								
								if(Uploader_man==0 && userid >1)
								{
									//alert(1);
									$scope.Uploader_man=userid;
								}
								
								else
								{
									$scope.Uploader_man=Uploader_man;
								}
								
								
								
								$scope.Upload_status='<?php echo $data[0]->Upload_status;?>';
								$scope.Upload_status2='<?php echo $data[0]->Upload_status2;?>';
								$scope.Upload_status3='<?php echo $data[0]->Upload_status3;?>';
								 
								
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
								   Upload_status2:$scope.Upload_status2,
								   Upload_status3:$scope.Upload_status3,
									id:$scope.id,
							   
							   
							   })
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 window.location.href="<?php echo base_url();?>index.php/createproduct/upload_product_list";
				 } 
		 })
	 }
	 
 });
 
 </script>
 <script>
var d = document.getElementById("upload");
d.className += " active";
</script>