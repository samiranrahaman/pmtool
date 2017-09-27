<div class="content-wrapper" ng-init='init()' ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Product</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Product</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
       <!--<a href="<?php echo base_url();?>manageaccount/payment_list"><h4>Payment List</h4></a> -->
	<div class="container">
			<div class="row row-centered">
			   <div class="col-xs-6 col-centered col-min">
				<form  id="addaccount" name="addaccount" ng-submit="accountform()" novalidate >
					
						<div class="form-group has-feedback" ng-class="{ 'has-error' : addaccount.description.$invalid && !addaccount.description.$pristine }">
							<label for="sel1">Description:</label>
							<input type="text" class="form-control" placeholder="Description" id="description" name="description" ng-model="description" required> 
							<p ng-show="addaccount.description.$invalid && !addaccount.description.$pristine" class="help-block">Description is required.</p>
							
						</div> 
					
					  <div class="form-group" style="margin-top: 19px;">
						<div class="col-xs-4 pull-right">
								<button type="submit" class="btn btn-primary" ng-disabled="addaccount.$invalid">Create </button>
					   </div>
					  </div>
				</form>	
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
		 
		 
		 $http({
		  method:"post",
		  url:'<?php echo base_url();?>index.php/services/get_services_list',
		  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.serviceslist=data;
			 });
		 
		 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/user/get_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.userlist=data;
			 });
			 
		/*  $http({
		  method:"post",
		  url:'<?php echo base_url();?>index.php/property/get_property_list',
		  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.propertylist=data;
			 }); */
			
	}
	 
		 
		 
	  $scope.accountform=function()
	 {
		 
		 $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/createproduct/post_produst_idea_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({due_date:$scope.due_date,paid_date:$scope.paid_date,description:$scope.description,
								amount_due:$scope.amount_due,amount_paid:$scope.amount_paid,
								amount_remain:$scope.amount_remain,
								payment_category:$scope.payment_category,
								tenant_user:$scope.tenant_user,
								property:'',
								payment_type:$scope.payment_type})
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 window.location.href="<?php echo base_url();?>index.php/manageaccount/payment_list";
				 } 
		 })
	 }
	 
 });
 
 </script>