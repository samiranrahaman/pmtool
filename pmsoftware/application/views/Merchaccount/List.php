<div class="content-wrapper" ng-controller="userlist">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Merch Accounts List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Merchaccount</li>
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
                                        <li role="presentation" class="active"><a href="<?php echo base_url();?>index.php/merchaccount" aria-controls="home" role="tab" >Merch Account List</a></li>
                                        <li role="presentation">
										<a ng-if="userlist.length<=9" href="<?php echo base_url();?>index.php/merchaccount/add_merch" aria-controls="profile" role="tab" >Add New</a>
										<a ng-if="userlist.length>=10" href="javascript:void(0)" onClick="alert('Max Limit 10 accounts!')" aria-controls="profile" role="tab" >Add New</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home" style="width: 96%;margin-left: 23px;">
										
			                              <div class="row table_title">
											
											  <div class="col-sm-3" style="font-size: larger;font-weight: bold;">Name</div>
											  
											 
										</div>
										<div class="row " ng-repeat="item in userlist " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #fff;">
											
											  <div class="col-sm-3">{{item.name}} </div>
											   
												<div class="col-sm-3">
												
												<!--<a class="btn btn-primary" href="<?php echo base_url();?>index.php/adminuser/get_user_details/{{item.admin_id}}">View</a>|-->
												
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/merchaccount/edit_merch_details/{{item.id}}">Edit</a>|
												<a href="javascript:void(0)" class="delete_button" ng-click="delete(item.id)">Delete</a>
												</div>
										         
										</div>
										<div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;" ng-show="!userlist.length">No Result Found!</div>
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
	  url:'<?php echo base_url();?>index.php/merchaccount/get_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data);
		 $scope.userlist=data;
		 
	 });
	 
	/* $scope.checked=function(id)
	{
	    alert(id);
		$http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/adminuser/user_status',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:id})
			}).success(function(data) {
				 console.log(data);
				 
				
			});
	} */		
$scope.delete = function (str) 
       {
		  // alert(str);
            var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');

    if (deleteUser) {
      
	  
	  $http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/merchaccount/merch_delete',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/merchaccount";
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
var d = document.getElementById("merchaccount");
d.className += " active";
</script>
<script>
var d2 = document.getElementById("Setting");
d2.className += " active";
</script>