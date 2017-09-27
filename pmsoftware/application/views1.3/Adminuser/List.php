<div class="content-wrapper" ng-controller="userlist">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>User List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Userlist</li>
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
                                        <li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/adminuser" aria-controls="home" role="tab" >Users List</a></li>
                                        <li role="presentation"><a href="<?php echo base_url();?>index.php/adminuser/add_user" aria-controls="profile" role="tab" >Add New</a></li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home" style="width: 96%;margin-left: 23px;">
										
			                              <div class="row table_title">
											
											  <div class="col-sm-3" style="font-size: larger;font-weight: bold;">Name</div>
											  
											   <div class="col-sm-2" style="font-size: larger;font-weight: bold;">User Type</div>
											   
											    <div class="col-sm-3" style="font-size: larger;font-weight: bold;">Email</div>
												<div class="col-sm-1" style="font-size: larger;font-weight: bold;">Status</div>
												<div class="col-sm-3" style="font-size: larger;font-weight: bold;">Action</div>
										         
										</div>
										<div class="row " ng-repeat="item in userlist " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #fff;">
											
											  <div class="col-sm-3">{{item.admin_first_name}} {{item.admin_last_name}}</div>
											  <div class="col-sm-2">{{item.admin_role_id}}</div>
											  
											  <div class="col-sm-3">{{item.admin_email_id}}</div>
											   <div ng-if="item.adminadmin_status==0" class="col-sm-1">
											   <input type="checkbox" ng-model="active" ng-click="checked(item.admin_id)">
											   </div>
											   
											    <div ng-if="item.adminadmin_status==1" class="col-sm-1">
											   <input type="checkbox" ng-model="active" ng-click="checked(item.admin_id)" ng-checked="true">
											   </div>
											   
												<div class="col-sm-3">
												
												<!--<a class="btn btn-primary" href="<?php echo base_url();?>index.php/adminuser/get_user_details/{{item.admin_id}}">View</a>|-->
												
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/adminuser/edit_user_details/{{item.admin_id}}">Edit</a>|
												<a href="javascript:void(0)" class="delete_button" ng-click="delete(item.admin_id)">Delete</a>
												</div>
										         
										</div>
										<div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;"ng-show="!userlist.length">No Result Found!</div>
										</div>
                                        <!--<div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>-->
                                        
                                       
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
 app.controller("userlist",function($scope,$http,$window){
	 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/adminuser/get_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data);
		 $scope.userlist=data;
	 });
	 
	$scope.checked=function(id)
	{
		//alert(id);
		$http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/adminuser/user_status',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:id})
			}).success(function(data) {
				 console.log(data);
				 
				
			});
	}		
$scope.delete = function (str) 
       {
		  // alert(str);
            var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');

    if (deleteUser) {
      
	  
	  $http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/adminuser/user_delete',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/adminuser";
				 }
				 else
				 {
					 //$scope.validationError = true;
				 } 
				
			});
	  
      }   
			   
    }
	 
 });
 </script>
 <script>
var d = document.getElementById("adminuser");
d.className += " active";
</script>