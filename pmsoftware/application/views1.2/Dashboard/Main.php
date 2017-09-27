<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Dashboard</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Dashboard</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
        
	<div class="container">
			<!--<div class="row row-centered">
			   <div class="col-xs-6 col-centered col-min">
			   <div class="item"> 
			   <div class="content">
			   <h1 style="text-align: center;">Profile Life Cycle Overview</h1>
			   </div>
			   </div>
			   </div>
			</div>-->
			<h3>Profile Life Cycle Overview</h3>
			<div class="row row-centered">
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #6fb9e4;padding: 17px 8px 7px 9px;">
			   <h4 style="text-align: center;font-weight: normal;">Shirt in Funnel</h4>
			   <p style="text-align: center;font-size: 29px;font-weight: bold;">{{totalcomplete}}</p>
			   </div>
			   </div>
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #6fb9e4;padding: 17px 8px 7px 9px;">
			   <h4 style="text-align: center;font-weight: normal;">Design Ready</h4>
			   <p style="text-align: center;font-size: 29px;font-weight: bold;">{{designcomplete}}</p>
			   </div>
			   </div>
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #6fb9e4;padding: 17px 8px 7px 9px;">
			   <h4 style="text-align: center;font-weight: normal;">Copy Ready</h4>
			   <p style="text-align: center;font-size: 29px;font-weight: bold;">{{copycomplete}}</p>
			   </div>
			   </div>
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #6fb9e4;padding: 17px 8px 7px 9px;">
			   <h4 style="text-align: center;font-weight: normal;">Launch Ready</h4>
			   <p style="text-align: center;font-size: 29px;font-weight: bold;">{{uploadcomplete}}</p>
			   </div>
			   </div>
			</div>
			
			<h3>Design Priority Ranking</h3>
			<div class="col-xs-12 col-centered col-min" style="width:100%;">
			
			<div class="row row-centered" style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #3c8dbc;color: #fff;font-size: 16px;font-weight: bold;">
			   <div class="col-xs-4 col-centered col-min" >
			   <h4 style="text-align: center;">Priority</h4>
			   </div>
			   <div class="col-xs-4 col-centered col-min" >
			   
			   <h4 style="text-align: center;">Level</h4>
			  
			   
			   </div>
			   <div class="col-xs-4 col-centered col-min" >
			   
			   <h4 style="text-align: center;">Quantity</h4>
			   
			   </div>
			</div>
			<div class="row " ng-repeat="item in priority_items " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
			<div class="col-xs-4 col-centered col-min">
			 
			   <h4 style="text-align: center;">
			   <div ng-if="item.Priority==1" style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> A+</div>
											<div ng-if="item.Priority==2"style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> A</div>
											<div ng-if="item.Priority==3"style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> B</div>
											<div  ng-if="item.Priority==4"style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> C</div>
											<div  ng-if="item.Priority==5"style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> D</div>
											<div ng-if="item.Priority==6"style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> E</div>
											<div ng-if="item.Priority==6"style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> F</div>
			   </h4>
			  
			   </div>
			   <div class="col-xs-4 col-centered col-min" >
			   
			   <h4 style="text-align: center;"><div ng-if="item.design_level==1">Level1</div>
											 <div ng-if="item.design_level==2">Level2</div>
											 <div  ng-if="item.design_level==3">Level3</div>
				</h4>
			  
			   
			   </div>
			   <div class="col-xs-4 col-centered col-min" >
			   
			   <h4 style="text-align: center;">{{item.total}}</h4>
			   
			   </div>
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
	  url:'<?php echo base_url();?>index.php/createproduct/get_dashbord_view',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data.totalcomplete);
		 //$scope.idealist=data;
		 $scope.totalcomplete=data.totalcomplete;
		 $scope.designcomplete=data.designcomplete;
		 $scope.copycomplete=data.copycomplete;
		 $scope.uploadcomplete=data.uploadcomplete;
		 $scope.priority_items=data.Prirityarray;
	 });


	 
 });
 </script>