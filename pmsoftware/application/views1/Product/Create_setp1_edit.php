
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular-route.min.js"></script>
        <div class="content-wrapper" ng-init='init()' ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Update Idea</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Product</li>
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
                                        <li role="presentation" class="active" ><a  href="<?php echo base_url();?>index.php/createproduct" aria-controls="home" role="tab" >Add</a>
										</li>
                                        <li role="presentation"><a  href="<?php echo base_url();?>index.php/createproduct/idea_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										<div class="row">
										 <div class="col-xs-4 col-centered col-min">
										   <div class="form-group" ng-controller="myCtrl">
												  
															<label for="sel1">Design Example Image:</label>
															
														 <input type = "file" file-model = "myFile"/>
														 <div id="imgpreview"><?php if($data[0]->Thumbnail!='') {?>
														 <img class="thumb" src="<?php echo base_url();?><?php echo $data[0]->Thumbnail;?>" style="width: 355px;padding: 9px 7px 13px 3px;"/>
														 <?php } ?></div>
														 <button ng-click = "uploadFile()">Upload</button>
													</div>
											</div>
										<div class="col-xs-4 col-centered col-min">
										   <?php  //echo"<pre>";print_r($data);?>
											<form  id="createproduct" name="createproduct" ng-submit="productform()" novalidate >
											<input type="hidden" class="form-control"  id="id" name="id" ng-model="id" ng-value="id" required>
											<div id="image_file"><input type="hidden" class="form-control"  id="Thumbnail" name="Thumbnail" ng-model="Thumbnail" ng-value="Thumbnail" ></div>
												
													<!--<div class="form-group"  ng-class="{ 'has-error' : createproduct.ideaman.$invalid && !createproduct.ideaman.$pristine }">
												  
															<label for="sel1">Idea Man:</label>
															
														 <select class="form-control" id="ideaman" name="ideaman"  required ng-model="ideaman"
															ng-options="opt.id as opt.name for opt in userlist">
														</select>
														
													<p ng-show="createproduct.ideaman.$invalid && !createproduct.ideaman.$pristine" class="help-block">Field is required.</p>
													</div>-->
													
													<?php if($user_info[0]->admin_id==1) { ?>
													  <div class="form-group"  ng-class="{ 'has-error' : createproduct.ideaman.$invalid && !createproduct.ideaman.$pristine }">
												  
															<label for="sel1">Idea Man:<span style="color: red;">*</span></label>
															
														 <select class="form-control" id="ideaman" name="ideaman"  required ng-model="ideaman"
															ng-options="opt.id as opt.name for opt in userlist">
														</select>
														
													<p ng-show="createproduct.ideaman.$invalid && !createproduct.ideaman.$pristine" class="help-block">Field is required.</p>
													</div>
												<?php } else { ?>
												
													 <input  type="hidden" class="form-control"  id="ideaman" name="ideaman" ng-model="ideaman" ng-value="ideaman" required>
												
												<?php }?>
													
													
													
													
													
													
													
													
													
													<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.ideaurl.$invalid && !createproduct.ideaurl.$pristine }">
														<label for="sel1">Idea Url:<span style="color: red;">*</span></label>
														<input type="text" class="form-control" placeholder="Idea Url" id="ideaurl" name="ideaurl" ng-model="ideaurl" required> 
														<p ng-show="createproduct.ideaurl.$invalid && !createproduct.ideaurl.$pristine" class="help-block">Idea Url is required.</p>
														
													</div> 
												  <div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.BSR.$invalid && !createproduct.BSR.$pristine }">
														<label for="sel1">BSR:<span style="color: red;">*</span></label>
														<input ng-init="BSR=<?php echo $data[0]->BSR;?>" type="number" class="form-control" placeholder="BSR" id="BSR" name="BSR" ng-model="BSR" required> 
														<p ng-show="createproduct.BSR.$invalid && !createproduct.BSR.$pristine" class="help-block">BSR is required.</p>
														
													</div>
													<div class="form-group"  ng-class="{ 'has-error' : createproduct.Priority.$invalid && !createproduct.Priority.$pristine }">
												  
															<label for="sel1">Priority:<span style="color: red;">*</span></label>
															
														 <select class="form-control" id="Priority" name="Priority"  required ng-model="Priority"
															ng-options="opt.id as opt.name for opt in priority_list">
														</select>
														
													<p ng-show="createproduct.Priority.$invalid && !createproduct.Priority.$pristine" class="help-block">Field is required.</p>
													</div>
												
												   <div class="form-group"  ng-class="{ 'has-error' : createproduct.TM_status.$invalid && !createproduct.TM_status.$pristine }">
												  
															<label for="sel1">TM Status:<span style="color: red;">*</span></label>
															
														 <select class="form-control" id="TM_status" name="TM_status"  required ng-model="TM_status"
															ng-options="opt.id as opt.name for opt in TM_status_list">
														</select>
														
													<p ng-show="createproduct.TM_status.$invalid && !createproduct.TM_status.$pristine" class="help-block">Field is required.</p>
													</div>
													<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Primaryword.$invalid && !createproduct.Primaryword.$pristine }">
														<label for="sel1">Primary Keyword :</label>
														<input type="text" class="form-control" placeholder="Primary Keyword" id="Primaryword" name="Primaryword" ng-model="Primaryword" > 
														<p ng-show="createproduct.Primaryword.$invalid && !createproduct.Primaryword.$pristine" class="help-block">Field is required.</p>
														
													</div> 
													</div>
											<div class="col-xs-4 col-centered col-min">
						
													
													
													<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Secondaryword.$invalid && !createproduct.Secondaryword.$pristine }">
														<label for="sel1">Secondary Keyword :</label>
														<!--<input type="text" class="form-control" placeholder="Secondary Keyword" id="Secondaryword" name="Secondaryword" ng-model="Secondaryword" required> -->
														<textarea cols="30" rows="5" maxlength="150"  class="form-control" id="Secondaryword" name="Secondaryword"  ng-model="Secondaryword"></textarea>
														<p ng-show="createproduct.Secondaryword.$invalid && !createproduct.Secondaryword.$pristine" class="help-block">Field is required.</p>
													</div>
													
													<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Niche_tags.$invalid && !createproduct.Niche_tags.$pristine }">
														<label for="sel1">Niche Tags  :</label>
														<input type="text" class="form-control" placeholder="Niche Tags" id="Niche_tags" name="Niche_tags" ng-model="Niche_tags" required> 
														<p ng-show="createproduct.Niche_tags.$invalid && !createproduct.Niche_tags.$pristine" class="help-block">Field is required.</p>
													</div>
													<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.Notes.$invalid && !createproduct.Notes.$pristine }">
														<label for="sel1">Notes :</label>
														<!--<input type="text" class="form-control" placeholder="Notes" id="Notes" name="Notes" ng-model="Notes" required> -->
														<textarea cols="30" rows="5" maxlength="150"  class="form-control" id="Notes" name="Notes"  ng-model="Notes"></textarea>
														<p ng-show="createproduct.Notes.$invalid && !createproduct.Notes.$pristine" class="help-block">Field is required.</p>
													</div>
													
													 <!--<div class="form-group"  ng-class="{ 'has-error' : createproduct.Idea_status.$invalid && !createproduct.Idea_status.$pristine }">
												  
															<label for="sel1">Status:</label>
															
														 <select class="form-control" id="Idea_status" name="Idea_status"  required ng-model="Idea_status"
															ng-options="opt.id as opt.name for opt in Idea_status_list">
														</select>
														
													<p ng-show="createproduct.Idea_status.$invalid && !createproduct.Idea_status.$pristine" class="help-block">Field is required.</p>
													</div>-->
													<?php if($user_info[0]->admin_id==1) { ?>
													  <div class="form-group"  ng-class="{ 'has-error' : createproduct.Idea_status.$invalid && !createproduct.Idea_status.$pristine }">
												  
															<label for="sel1">Status:</label>
															
														 <select class="form-control" id="Idea_status" name="Idea_status"  required ng-model="Idea_status"
															ng-options="opt.id as opt.name for opt in Idea_status_list">
														</select>
														
													<p ng-show="createproduct.Idea_status.$invalid && !createproduct.Idea_status.$pristine" class="help-block">Field is required.</p>
													</div>
												<?php } else { ?>
												
													 <input  type="hidden" class="form-control"  id="Idea_status" name="Idea_status" ng-model="Idea_status" ng-value="Idea_status" required>
												
												<?php }?>
												  <div class="form-group" style="margin-top: 19px;">
													<div class="col-xs-4 pull-right">
															<!--<a href="<?php echo base_url();?>index.php/createproduct/idea_list" class="btn btn-primary" >Back </a>
															|-->
															<button type="submit" class="btn btn-primary" ng-disabled="createproduct.$invalid">Update </button>
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
 
				<!--<div>
				  
					
					<div ng-controller = "myCtrl">
						 <input type = "file" file-model = "myFile"/>
						 <button ng-click = "uploadFile()">upload me</button>
					  </div>
				  
				</div>-->
 <script>
 var app=angular.module("myApp",[]);
 app.controller('productidea',function($scope,$http){
	 $scope.init=function()
	 {
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
							   $scope.id='<?php echo $data[0]->id;?>';
							   $scope.Thumbnail='<?php echo $data[0]->Thumbnail;?>';
							   
		 
		 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/adminuser/get_idea_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.userlist=data;
			 });
		 
		 
		 
		 
		 
		 /* $scope.payment_type_list=[{
			id:'1' ,
			name:'Demo User'
		 },
		 {
			id:'2' ,
			name:'Test User'  
		 }]; */
		 
		 $scope.priority_list=[
		 {
			id:'1' ,
			name:'A+'
		 },
		 {
			id:'2' ,
			name:'A'  
		 },
		 {
		 	id:'3' ,
			name:'B'  
		 },
		 {
		 	id:'4' ,
			name:'C'  
		 },
		 {
		 	id:'5' ,
			name:'D'  
		 },
		 {
		 	id:'6' ,
			name:'E'  
		 },
		 {
		 	id:'7' ,
			name:'F'  
		 }
		 ];
		 
		 
		 
		 $scope.TM_status_list=[{
			id:'1' ,
			name:'Approved'
		 },
		 {
			id:'2' ,
			name:'Pending'  
		 },
		 {
			id:'3' ,
			name:'None'  
		 }
		 ];
		 
		  $scope.Idea_status_list=[
		 {
			id:'1' ,
			name:'Pending'  
		 },
		 {
			id:'2' ,
			name:'Worning'  
		 },
		 {
			id:'3' ,
			name:'Done'  
		 }
		 ];
		 
		 
		/*  $http({
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
			 }); */
			 
		/*  $http({
		  method:"post",
		  url:'<?php echo base_url();?>index.php/property/get_property_list',
		  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.propertylist=data;
			 }); */
			
	}
	 
		 
		 
	  $scope.productform=function()
	 {   
	    var Thumbnail=document.getElementById("Thumbnail").value;
		 //alert(Thumbnail)
		 $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/createproduct/update_product_idea_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({ideaman:$scope.ideaman,
							   ideaurl:$scope.ideaurl,
							    BSR:$scope.BSR,
								 Priority:$scope.Priority,
								  TM_status:$scope.TM_status,
								   Primaryword:$scope.Primaryword,
								    Secondaryword:$scope.Secondaryword,
									Niche_tags:$scope.Niche_tags,
									Notes:$scope.Notes,
									Idea_status:$scope.Idea_status,
									id:$scope.id,
									Thumbnail:Thumbnail,
							   
							   })
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 window.location.href="<?php echo base_url();?>index.php/createproduct/idea_list";
				 } 
		 })
	 }
	 
 });
 
 </script>
  <script>
         //var myApp = angular.module('myApp', []);
         
         app.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;
                  
                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);
      
         /* app.service('fileUpload', ['$https:', function ($https:) {
            this.uploadFileToUrl = function(file, uploadUrl){
               var fd = new FormData();
               fd.append('file', file);
            
               $https:.post(uploadUrl, fd, {
                  transformRequest: angular.identity,
                  headers: {'Content-Type': undefined}
               })
            
               .success(function(){
               })
            
               .error(function(){
               });
            }
         }]); */
			  app.service('fileUpload', ['$http', function ($http) {
			this.uploadFileToUrl = function(file, uploadUrl){
				var fd = new FormData();
				fd.append('file', file);
				$http.post(uploadUrl, fd, {
					transformRequest: angular.identity,
					headers: {'Content-Type': undefined}
				})
				.success(function(res){
					console.log(res);
					document.getElementById("imgpreview").innerHTML='<img class="thumb" src="<?php echo base_url();?>'+res+'" style="width: 355px;padding: 9px 7px 13px 3px;"/>';
					/* document.getElementById("image_file").innerHTML='<input type="hidden" class="form-control"  id="image_name" name="image_name" ng-model="image_name" ng-value="image_name" required>';
					
					 */
					document.getElementById("image_file").innerHTML='<input type="hidden" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required"  id="Thumbnail" name="Thumbnail" ng-model="Thumbnail" ng-value="Thumbnail" required="" value="'+res+'"  >';
					
					
					
					
				})
				.error(function(){
				});
			}
		}]);
         app.controller('myCtrl', ['$scope', 'fileUpload', function($scope, fileUpload){
             $scope.uploadFile = function(){
               var file = $scope.myFile;
               
               //console.log('file is ' );
               //console.dir(file);
               
               //var uploadUrl = "<?php echo base_url();?>fileUpload";
			   var uploadUrl = "<?php echo base_url();?>index.php/createproduct/upload_file";
               fileUpload.uploadFileToUrl(file, uploadUrl);
			   console.log(fileUpload);
            }; 
			
         }]);
			
      </script>