<script src="<?php echo base_url();?>js/checklist-model.js"></script>
<div class="content-wrapper" class="content-wrapper" ng-controller="addtypecontroller">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Edit Role</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Administrators</li>
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
                                        <li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/adminroles" aria-controls="home" role="tab" >Roles</a>
										</li>
                                        <li role="presentation" ><a href="<?php echo base_url();?>index.php/adminroles/add_role" aria-controls="profile" role="tab" >Add New Role</a></li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home" style="width: 96%;margin-left: 23px;">
										<form  id="addtype" name="addtype" ng-submit="addtypesubmit()" novalidate >
										 <input style="display:none" type="text" name="role_id" ng-model="role_id">
									   <?php //print_r($data);?>
										  <div class="form-group has-feedback" ng-class="{ 'has-error' : addtype.title.$invalid && !addtype.title.$pristine }">
											<label for="sel1">Role name:</label>
											<input type="text" class="form-control" placeholder="Role Name" id="title" name="title" ng-model="title" ng-value="title" required> 
											<p ng-show="addtype.title.$invalid && !addtype.title.$pristine" class="help-block">Role name is required.</p>
											
										  </div>
										 
										  <div class="form-group has-feedback" ng-repeat="role in roles">
										  <label >
											  <input type="checkbox" checklist-model="user.roles" checklist-value="role"> {{role}}
										  </label>
										  </div>
									   
										  
										  
										  <div class="form-group">
											<div class="col-xs-4 pull-right">
													<button type="submit" class="btn btn-primary" ng-disabled="addtype.$invalid">Update</button>
													|
													<a class="btn btn-primary" href="<?php echo base_url();?>index.php/adminroles">Back</a>
										   </div>
										  </div>
										  
										  
										</form>	
										   <button ng-click="checkAll()" style="margin-right: 10px">Check all</button>
										  <button ng-click="uncheckAll()" style="margin-right: 10px">UnCheck all</button>
										</div>
                                        <!--<div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>-->
                                        
                                       
                                    </div>
								</div>
                            </div>
				</div>
			
			   <!--<div class="col-xs-6 col-centered col-min">	
					<form  id="addtype" name="addtype" ng-submit="addtypesubmit()" novalidate >
					 <input style="display:none" type="text" name="role_id" ng-model="role_id">
				   <?php //print_r($data);?>
					  <div class="form-group has-feedback" ng-class="{ 'has-error' : addtype.title.$invalid && !addtype.title.$pristine }">
						<label for="sel1">Role name:</label>
						<input type="text" class="form-control" placeholder="Role Name" id="title" name="title" ng-model="title" ng-value="title" required> 
						<p ng-show="addtype.title.$invalid && !addtype.title.$pristine" class="help-block">Role name is required.</p>
						
					  </div>
					 
					  <div class="form-group has-feedback" ng-repeat="role in roles">
					  <label >
						  <input type="checkbox" checklist-model="user.roles" checklist-value="role"> {{role}}
                      </label>
					  </div>
				   
					  
					  
					  <div class="form-group">
						<div class="col-xs-4 pull-right">
								<button type="submit" class="btn btn-primary" ng-disabled="addtype.$invalid">Update</button>
								|
								<a class="btn btn-primary" href="<?php echo base_url();?>index.php/adminroles">Back</a>
					   </div>
					  </div>
					  
					  
					</form>	
			           <button ng-click="checkAll()" style="margin-right: 10px">Check all</button>
					  <button ng-click="uncheckAll()" style="margin-right: 10px">UnCheck all</button>
			    
			   </div>-->
			   
			</div>
    </div>
	
    </section>
    <!-- /.content -->
  </div>
 <script>
var app = angular.module("myApp", ["checklist-model"]);
app.controller("addtypecontroller", function($scope,$http,$timeout,$window) {
	
$scope.title='<?php echo $data[0]->roll_name;?>';	
$scope.role_id='<?php echo $data[0]->role_id;?>';
	
/* $scope.roles=['ManageAccount','ManageUser','ManageCountry','ManageProperty','ManageServices','ManageRole','GlobalNotification','DomesticsHelps','Visitors']; */

//$scope.roles=['ManageAccount','ManageUser','ManageCountry','ManageProperty','ManageServices','ManageRole','ManageUsertype','ManageSubAdmin','GlobalNotification','DomesticsHelps','Visitors'];
$scope.roles=['IdeasManageUser','DesignManageUser','CopyWriteManageUser','UploadManageUser','ManageSubAdmin','ManageRole'];

  $scope.user = {
    roles: <?php echo $data[0]->resource_id;?>
  }; 
  $scope.checkAll = function() {
    $scope.user.roles = angular.copy($scope.roles);
  };
  $scope.uncheckAll = function() {
    $scope.user.roles = [];
  };
  /* $scope.checkFirst = function() {
    $scope.user.roles.splice(0, $scope.user.roles.length); 
    $scope.user.roles.push('guest');
  }; */
 
 $scope.addtypesubmit=function()
{
	
	console.log($scope.user.roles);
	 //alert($scope.productSelected.label);
		 $http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/adminroles/update_role',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			data :JSON.stringify({title:$scope.title,
			resource_list:$scope.user.roles,role_id:$scope.role_id})
			}).success(function(data) {
				 console.log(data);
				if(data==1)
 				 {
					   window.location.href="<?php echo base_url();?>index.php/adminroles";
				 }
				 
				
			}); 
} 
 
			
			
  
});
</script>
<script>
var d = document.getElementById("role");
d.className += " active";
</script>
<script>
var d2 = document.getElementById("Setting");
d2.className += " active";
</script>