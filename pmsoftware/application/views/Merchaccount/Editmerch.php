<div class="content-wrapper"  ng-init='init()' ng-controller="addusercontroller">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Edit Merch Accounts</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Edit Merchmccounts</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
   <div class="container">
			<div class="row row-centered">
			
			
			
			    <div class="row">
		                                <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                     <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" ><a href="<?php echo base_url();?>index.php/merchaccount" aria-controls="home" role="tab" >Merch Account List</a></li>
                                        <li role="presentation" class="active" ><a href="<?php echo base_url();?>index.php/merchaccount/add_merch" aria-controls="profile" role="tab" >Add New</a></li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home" style="width: 96%;margin-left: 23px;">
										
			                             
										<?php //print_r($data);?>
							   <form  id="adduser" name="adduser" ng-submit="adduserform()" novalidate >
								  <input type="hidden" class="form-control"  id="user_id" name="user_id" ng-model="user_id" ng-value="user_id" required>
								  
								<div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.firstname.$invalid && !adduser.firstname.$pristine }">
									<label for="sel1">Merch Account Name:<span style="color: red;">*</span></label>
									<input type="text" class="form-control" placeholder="Merch Account Name" id="firstname" name="firstname" ng-model="firstname" ng-value="firstname" required> 
									<p ng-show="adduser.firstname.$invalid && !adduser.firstname.$pristine" class="help-block"> Name is required.</p>
									
								</div>
				
				               <div class="row">
		                                <div class="col-md-12">  
										  <div class="form-group pull-right">
											<button id="update_button" type="submit" class="btn btn-primary" ng-disabled="adduser.$invalid">Update</button>
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
	
    </section>
    <!-- /.content -->
  </div>
 <script>
 var app = angular.module("myApp",[]);
 app.controller('addusercontroller', function($scope,$http,$timeout){
	 
 
	

		$scope.user_id='<?php echo $data[0]->id?>';
		$scope.firstname = '<?php echo $data[0]->name?>';	

   $scope.adduserform=function()
	 {
		 //alert($scope.firstname)
		  $http({
							 method:"post",
							 url:'<?php echo base_url();?>index.php/merchaccount/update_add_merch',
							 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
							 data :JSON.stringify({name:$scope.firstname,id:$scope.user_id})
							 }).success(function(data){
								 console.log(data);
								 
										  
										   if(data==1)
									 {
										  
										window.location.href="<?php echo base_url();?>index.php/merchaccount";
									 }
									 else
									 {
										  window.location.href="<?php echo base_url();?>index.php/login";
									 }
							 })	
			
		 
	 }
	
 
 })
 </script>
 <script>
var d = document.getElementById("adminuser");
d.className += " active";
</script>

<script>
var d2 = document.getElementById("Setting");
d2.className += " active";
</script>