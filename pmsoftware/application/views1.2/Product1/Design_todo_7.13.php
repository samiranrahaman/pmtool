<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>ToDo Design List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">ToDo Design</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
     <div class="container">
			<div class="row row-centered">
			   <div class="col-xs-12 col-centered col-min" style="width:95%;">
			                            <div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #3c8dbc;color: #fff;font-size: 16px;font-weight: bold;">
											   <div class="col-sm-1">Status</div>
											   <div class="col-sm-1">IdeaMan</div>
											   <div class="col-sm-1">IdeaUrl</div>
											   <div class="col-sm-1">BSR</div>
											    <div class="col-sm-1">Priority</div>
												<div class="col-sm-1">TM</div>
												<div class="col-sm-1">P-Keyword </div>
												<div class="col-sm-1">S-Keywords </div>
												<div class="col-sm-1">Tags </div>
											   <div class="col-sm-1">Notes </div>
												<div class="col-sm-2">Action</div>
										         
										</div>
										<div class="row " ng-repeat="item in idealist " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
											 	
										 <div class="col-sm-1" ng-if="item.Idea_status==1">
										 <img class="thumb" src="<?php echo base_url();?>images/pending.png" style="width:30px;"/>
							             </div>
										 <div class="col-sm-1" ng-if="item.Idea_status==2"> <img class="thumb" src="<?php echo base_url();?>images/error.png" style="width:30px;"/></div>
										 <div class="col-sm-1" ng-if="item.Idea_status==3"> <img class="thumb" src="<?php echo base_url();?>images/approved.png" style="width:30px;"/></div>
                                           <div class="col-sm-1">{{item.admin_first_name}} {{item.admin_last_name}}</div>
										   <div class="col-sm-1">{{item.idea_url}}</div>
										   <div class="col-sm-1">{{item.BSR}}</div>
										    
											<div class="col-sm-1" ng-if="item.Priority==1" style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;">A+</div>
											<div class="col-sm-1" ng-if="item.Priority==2"style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff;">A</div>
											<div class="col-sm-1" ng-if="item.Priority==3"style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff;">B</div>
											<div class="col-sm-1" ng-if="item.Priority==4"style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;">C</div>
											<div class="col-sm-1" ng-if="item.Priority==5"style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff;">D</div>
											<div class="col-sm-1" ng-if="item.Priority==6"style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff;">E</div>
											<div class="col-sm-1" ng-if="item.Priority==6"style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff;">F</div>

											<div class="col-sm-1"  ng-if="item.TM_status==1">Approved</div>
											<div class="col-sm-1"  ng-if="item.TM_status==2">Pending</div>
											<div class="col-sm-1"  ng-if="item.TM_status==3">None</div>
											
											
											  <div class="col-sm-1">{{item.Primaryword}}</div>
											   <div class="col-sm-1">{{item.Secondaryword}}</div>
											    <div class="col-sm-1">{{item.Niche_tags}}</div>
												 <div class="col-sm-1">{{item.Notes}}</div>
											<div class="col-sm-2"> 
											<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/design_add/{{item.id}}">Add Design</a>
											</div>
										         
										</div>
										
										<div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;" ng-show="!idealist.length">No Result Found!</div>
			   </div>
			</div>
    </div>
	
    </section>
    <!-- /.content -->
  </div>
 <script>
 var app = angular.module("myApp",[]);
 app.controller("productidea",function($scope,$http,$window){
	 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/createproduct/get_idea_list_todesign',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data);
		 $scope.idealist=data;
	 });

  $scope.delete = function (str) 
       {
		
            var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');

    if (deleteUser) {
      
	  
	  $http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/createproduct/idea_delete',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/createproduct/idea_list";
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