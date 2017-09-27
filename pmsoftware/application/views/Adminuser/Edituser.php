<div class="content-wrapper"  ng-init='init()' ng-controller="addusercontroller">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Edit User</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Dashboard</li>
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
                                        <li role="presentation" >
										<a href="<?php echo base_url();?>index.php/adminuser" aria-controls="home" role="tab" >Users List</a>
										</li>
                                        <li role="presentation">
										<a class="active" href="<?php echo base_url();?>index.php/adminuser/add_user" aria-controls="profile" role="tab" >Add New</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home" style="width: 96%;margin-left: 23px;">
										
			                             
										<?php //print_r($data);?>
	           <form  id="adduser" name="adduser" ng-submit="adduserform()" novalidate >
                  <h3>Personal Information</h3>
				  <input type="hidden" class="form-control"  id="user_id" name="user_id" ng-model="user_id" ng-value="user_id" required>
				  
				<div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.firstname.$invalid && !adduser.firstname.$pristine }">
					<label for="sel1">First Name:<span style="color: red;">*</span></label>
					<input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname" ng-model="firstname" ng-value="firstname" required> 
					<p ng-show="adduser.firstname.$invalid && !adduser.firstname.$pristine" class="help-block">First Name is required.</p>
					
				</div>
				<!--<div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.lastname.$invalid && !adduser.lastname.$pristine }">
					<label for="sel1">Last Name:</label>
					<input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" ng-model="lastname" ng-value="lastname" required> 
					<p ng-show="adduser.lastname.$invalid && !adduser.lastname.$pristine" class="help-block">Last Name is required.</p>
					
				</div>-->
				<div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.lastname.$invalid && !adduser.lastname.$pristine }">
					<label for="sel1">Last Name:</label>
					<input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" ng-model="lastname" ng-value="lastname" > 
					<p ng-show="adduser.lastname.$invalid && !adduser.lastname.$pristine" class="help-block">Last Name is required.</p>
					
				</div>
				
				<!--<div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.phone1.$invalid && !adduser.phone1.$pristine }">
					<label for="sel1">Home Phone:</label>
					<input type="number" ng-init="phone1=<?php echo $data[0]->admin_mobile_number ;?>" class="form-control" placeholder="" id="phone1" name="phone1" ng-model="phone1" ng-value="phone1" required>  
					<p ng-show="adduser.phone1.$invalid && !adduser.phone1.$pristine" class="help-block">Phone Number is required.</p>
					
				</div>-->
				<div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.email.$invalid && !adduser.email.$pristine }">
					<label for="sel1">Email ID:<span style="color: red;">*</span></label>
					<input type="email" class="form-control" placeholder="" id="email" name="email" ng-model="email" ng-value="email" required> 
					<p ng-show="adduser.email.$invalid && !adduser.email.$pristine" class="help-block">Email ID is required.</p>
					
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : adduser.user_type.$invalid && !adduser.user_type.$pristine }">
				  
							<label for="sel1">User Role:<span style="color: red;">*</span></label>
							
						 <select class="form-control"  id="user_type" name="user_type"  required ng-model="user_type" ng-value="user_type"
							ng-options="opt.role_id as opt.roll_name for opt in roleslist">
						</select>						
						
					<p ng-show="adduser.user_type.$invalid && !adduser.user_type.$pristine" class="help-block">User Role is required.</p>
				</div>
				 <div class="form-group has-feedback" ng-class="{ 'has-error' : adduser.username.$invalid && !adduser.username.$pristine }">
					<label for="sel1">Username:<span style="color: red;">*</span></label>
					<input readonly type="text" class="form-control" placeholder="Username" id="username" name="username" ng-model="username" required> 
					<p ng-show="adduser.username.$invalid && !adduser.username.$pristine" class="help-block">Username is required.</p>
					
				</div>
				
				 <div class="form-group has-feedback" >
								<label for="sel1"> Do you Want to Change Password?</label> 
								<input id="remember" name="remember" type="checkbox" onclick="validate()" /> 
				</div>
				<div id="passwordfield" style="display:none" >
								
				 </div>
	  
				  
				             <div class="row">
		                                <div class="col-md-12">  
										  <div class="form-group pull-right">
											<button id="update_button" type="submit" class="btn btn-primary" ng-disabled="adduser.$invalid">Update User</button>
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
	 
  $http({
			method : 'get',
			url : '<?php echo base_url();?>index.php/adminroles/get_roles',
	
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			}).success(function(data) {
				// alert(data.status);
			 console.log(data);

			 $scope.roleslist=data;
			 $scope.user_type= '<?php echo $data[0]->admin_role_id?>'; 
			 // console.log(data[1]);
			
		});
	

		$scope.user_id='<?php echo $data[0]->admin_id?>';
		 $scope.firstname = '<?php echo $data[0]->admin_first_name?>';	
		 $scope.lastname = '<?php echo $data[0]->admin_last_name?>';
		 //$scope.phone1='<?php echo $data[0]->admin_mobile_number?>';
		 $scope.email='<?php echo $data[0]->admin_email_id?>';  
		 $scope.username='<?php echo $data[0]->admin_username?>';
          

   $scope.adduserform=function()
	 {
		 
		 
				var remember = document.getElementById('remember');
				if (remember.checked){
					
					//var password=$scope.password;
					 var password=document.getElementById("password").value;
						 
					var n = password.length; 
					 if(n>0)
					 {
						 $http({
							 method:"post",
							 url:'<?php echo base_url();?>index.php/adminuser/update_add_user',
							 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
							 data :JSON.stringify({
								 firstname:$scope.firstname,
								 lastname:$scope.lastname,
								  phone1:'',email:$scope.email,
								user_type:$scope.user_type,
								user_id:$scope.user_id,
								username:$scope.username,
								password:password,})
							 }).success(function(data){
								 console.log(data); 
								 if(data==1)
									 {
										  
										  window.location.href="<?php echo base_url();?>index.php/adminuser";
									 }
									 else
									 {
										  window.location.href="<?php echo base_url();?>index.php/login";
									 } 
							})  
					 }
					 else
					 {
						  alert ('Please Enter Password!');
					 }

					
				}
				else{
				   
				   
				   $http({
							 method:"post",
							 url:'<?php echo base_url();?>index.php/adminuser/update_add_user',
							 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
							 data :JSON.stringify({firstname:$scope.firstname,lastname:$scope.lastname,
													phone1:'',email:$scope.email,
													user_type:$scope.user_type,
													user_id:$scope.user_id,
													
													password:'',})
							 }).success(function(data){
								 console.log(data);
								 if(data==1)
									 {
										  
										  window.location.href="<?php echo base_url();?>index.php/adminuser";
									 }
									 else
									 {
										  window.location.href="<?php echo base_url();?>index.php/login";
									 } 
							 })  
				   
				   
				}
			
		 
	 }
	 /* $scope.passwordchange=function()
	 {
		
		 var myEl=angular.element(document.querySelector("#password"));
		 myEl.attr('required','required');
		  var myEl2=angular.element(document.querySelector("#update_button"));
		 myEl2.attr('disabled','disabled');
		 
	 } */
 
 })
 </script>
 <script>
var d = document.getElementById("adminuser");
d.className += " active";
</script>
<script>
function validate(){
    var remember = document.getElementById('remember');
    if (remember.checked){
        
		document.getElementById("passwordfield").style.display = "block";
        document.getElementById("passwordfield").innerHTML='<div class="form-group has-feedback passwordfield"><label for="sel1">Password:<span style="color: red;">*</span></label><input type="password" class="form-control" placeholder="Password" id="password" name="password" ng-model="password" required></div>';

		
    }else{
        document.getElementById("passwordfield").style.display = "none";
    }
}
</script> 
<script>
var d2 = document.getElementById("Setting");
d2.className += " active";
</script>