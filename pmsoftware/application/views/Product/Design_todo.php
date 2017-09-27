<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>ToDo Design List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">ToDo Design</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
     <div class="container">
			<div class="row row-centered">
			
			
			    <div class="row">
		                          <div class="col-md-12">
                                   <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"  ><a  href="<?php echo base_url();?>index.php/createproduct/design_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation"><a  href="<?php echo base_url();?>index.php/createproduct/design_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										
										<div class="container">
										<span>
										<h5>Filter By:</br></br>
										<p><b>T-shirt:</b><input ng-model="search.Title" />   
										<b>P-keyword:</b><input ng-model="search.Primaryword" />   
										<b>Idea Man:</b><input ng-model="search.admin_first_name" />
										<b>Merch Account:</b>
										
										<select id="merch_account" name="merch_account"  required ng-model="search.merch_account"
														ng-options="opt.id as opt.name for opt in merchlist">
														<option value="">All</option>
										</select> 
										
										</p>
										<p>
										<b>Idea Date:</b><input  ng-model="search.idea_post_time" /> 
										<b>BSR:</b><input ng-model="search.BSR" />
										<b>Url:</b><input ng-model="search.idea_url" />   
										<b>TM:</b><select id="TM_status" name="TM_status"  required ng-model="search.TM_status"
														ng-options="opt.id as opt.name for opt in TM_status_list">
														<option value="">All</option>
													</select>
										<b>Priority:</b><select id="Priority" name="Priority"  required  ng-model="search.Priority"
														ng-options="opt.id as opt.name for opt in priority_list">
														<option value="">All</option>
													</select>
										</p>
										</h5>
										
										Showing : {{(currentPage-1)*itemsPerPage}} - {{(currentPage)*itemsPerPage}} of Records {{totalItems}}                 
										<!--Page No:<select ng-init="currentPage = 1"  ng-model="currentPage"> 
											   <option ng-repeat="pg in getpagesArray(pages) track by $index">{{$index+1}}</option>
											   </select>
											   -->
											</span>   
									   <span style="float: right;">
											<!-- pager -->
											<button ng-disabled="currentPage ==1" ng-click="currentPage=currentPage-1">
												Previous
											</button>
											
											<!--<button ng-repeat="pg in getpagesArray(pages) track by $index"  ng-click="getpage($index+1);">
											{{$index+1}} 
											</button>-->
											<button ng-repeat="pg in getpagesArray(pages) track by $index"  ng-click="getpage($index+1);">
											{{$index+1}} 
											</button>
											<!--{{currentPage+1}}/{{numberOfPages()}}-->
											<button ng-disabled="currentPage >=getpages()" ng-click="currentPage=currentPage+1">
											Next
											</button>
											
											<!--
											 <button ng-disabled="currentPage == 0" ng-click="currentPage=currentPage-1">
												Previous
											</button>
											{{currentPage+1}}/{{numberOfPages()}}
											<button ng-disabled="currentPage >= getData().length/pageSize - 1" ng-click="currentPage=currentPage+1">
												Next
											</button>
											-->									   
										View per page:
										<select ng-model="itemsPerPage" id="itemsPerPage" class="">
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
											 
										 </select>	    
									</span>	 
										
										<table class="table">
											<thead>
											  <tr class="table_title">
												
												<th style="width: 10%;">Thumbnail</th>
												<th>Date</th>
												<th>T-shirt ID</th>
												
												<th>Idea Url</th>
												<th>P-Keyword</th>
												
												
												<th>Priority</th>
												
												
												
												<th>Notes</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											 <!-- <tr ng-repeat="item in idealist ">-->
											  <tr ng-repeat="item in idealist.slice(((currentPage-1)*itemsPerPage), ((currentPage)*itemsPerPage)) | filter:search || limitTo:itemsPerPage"> 
      
											     <td><!--<img src="<?php echo base_url();?>{{item.Thumbnail}}" style="width:74%;"/>-->
												 
												 <a href="javascript:void(0)"data-toggle="modal" data-target="#imgModal{{$index}}"><img class="thumb" src="<?php echo base_url();?>{{item.Thumbnail}}" style="width:90%;"/></a>
												<div class="modal fade" id="imgModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											       
													  <!-- Modal content-->
													  <div class="modal-content">
														 <div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">×</button>
														  
														</div>
														<div class="modal-body">
														  <p><img class="thumb" src="<?php echo base_url();?>{{item.Thumbnail}}" style="width:100%;"/></p>  
														</div>
														
													  </div>
													  
													</div>
												  </div>
												</td>
												<td>{{item.idea_post_time}}</td>
												<td>T0{{item.id}}</td>
												
												<td><a href="{{item.idea_url}}" target="_blank">{{item.idea_url|domain}}</a>
												</td> 
												<td>
												<a href="javascript:void(0)"data-toggle="modal" data-target="#PmyModal{{$index}}">{{item.Primaryword| limitTo:20}}...</a>
												<div class="modal fade" id="PmyModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Primaryword}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div>
												
												</td>
												
												
												
												
												
												
												<td  ng-if="item.Priority==1"><span style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">A+</span></td>
												<td ng-if="item.Priority==2"><span style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">A</span></td>
												<td ng-if="item.Priority==3"><span style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">B</span></td>
												<td  ng-if="item.Priority==4"><span style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">C</span></td>
												<td  ng-if="item.Priority==5"><span style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">D </span></td>
												<td ng-if="item.Priority==6"> <span style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">E </span></td>
												<td ng-if="item.Priority==7"><span style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">F</span></td>
												
												
												
												
												
												<td><a href="javascript:void(0)"data-toggle="modal" data-target="#myModal{{$index}}">{{item.Notes| limitTo:20}}...</a>
												<div class="modal fade" id="myModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Notes}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div>
										  </td>
												<td>
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/design_add/{{item.id}}">Add Design</a>
												</td>
											  </tr>      
											  <tr ng-show="!idealist.length">
											  <td style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">No Result Found!</td>
											  </tr>
											 
											</tbody>
										  </table>
										
									
			                           
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
 app.controller("productidea",function($scope,$http,$window){
	 
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
		 }/* ,
		 {
		 	id:'6' ,
			name:'E'  
		 },
		 {
		 	id:'7' ,
			name:'F'  
		 } */
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
		 
		  $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/merchaccount/get_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.merchlist=data;
			 });
	 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/createproduct/get_idea_list_todesign',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data);
		 $scope.idealist=data;
		 
		 $scope.totalItems = $scope.idealist.length;  
  console.log($scope.totalItems);
  $scope.currentPage = 1;
  $scope.itemsPerPage = 25; 
  $scope.pages=Math.ceil($scope.idealist.length/ $scope.itemsPerPage);
  $scope.setPage = function (pageNo) {
    $scope.currentPage = pageNo;
  };

$scope.setItemsPerPage = function(num) { 
  $scope.itemsPerPage = num;
  $scope.currentPage = 1; //reset to first paghe
}
$scope.getpagesArray=function(num){
  return new Array(num);
}
$scope.getpage=function(str) 
{
	//alert(str)
	$scope.currentPage = str;
}
		 
	$scope.getpages=function() 
{
	//alert(str)
	 $scope.pages=Math.ceil($scope.idealist.length/ $scope.itemsPerPage);
     return $scope.pages;
}	
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
 app.filter( 'domain', function () {
  return function ( input ) {
    var matches,
        output = "",
        urls = /\w+:\/\/([\w|\.]+)/;

    matches = urls.exec( input );

    if ( matches !== null ) output = matches[1];

    return output;
  };
});
 
 </script>
 <script>
var d = document.getElementById("design");
d.className += " active";
</script>