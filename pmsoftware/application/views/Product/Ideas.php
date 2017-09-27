<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Ideas</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Ideas</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
      <!-- <a class="btn btn-primary" href="<?php echo base_url();?>index.php/createproduct/"><h4>Quick Add</h4></a>-->
	<div class="container">
			<div class="row row-centered">
			
					
					<div class="row">
		                          <div class="col-md-12">
                                   <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"  ><a  href="<?php echo base_url();?>index.php/createproduct" aria-controls="home" role="tab" >Add</a>
										</li>
                                        <li role="presentation" class="active"><a  href="<?php echo base_url();?>index.php/createproduct/idea_list" aria-controls="profile" role="tab" > Review</a>
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
										<b>Date:</b><input  ng-model="search.idea_post_time" /> 
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
												
												<!--<th>Image</th>-->
												<th style="width: 10%;">Thumbnail</th> 
												<th>Date</th>
												<th style="width: 8%;">T-shirt ID</th>
												<th style="width: 8%;">Idea Man</th> 
												<th style="width: 8%;">Merch</th>  
												<th style="width: 8%;">Idea Url</th>
												<th>BSR</th>
												<th>Priority</th>
												<th>TM</th>
												<th style="width: 8%;">P-Keyword</th>
												<th style="width: 8%;">S-Keyword</th>
												<th>Tags</th> 
												<th>Notes</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<!--<tr ng-repeat="item in idealist | filter:search">-->
									<tr ng-repeat="item in idealist.slice(((currentPage-1)*itemsPerPage), ((currentPage)*itemsPerPage)) | filter:search || limitTo:itemsPerPage"> 
      
												<!--<td><img class="thumb" src="<?php echo base_url();?>{{item.Thumbnail}}" style="width:40%;"/>
												</td>-->
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
												<td>{{item.idea_post_time }}</td>
												<td>T0{{item.id}}</td> 
												
												<td>{{item.admin_first_name}} {{item.admin_last_name}}</td>
												<td>{{item.merch_name}}</td>
												<!--<td><a href="http://{{item.idea_url}}" target="_blank">{{item.idea_url|limitTo:20}}...</a>
												</td>-->
												<td><a href="{{item.idea_url}}" target="_blank">{{item.idea_url|domain}}</a>
												</td>
												
												
												<td>{{item.BSR|number }}</td>
												<td  ng-if="item.Priority==1"><span style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">A+</span></td>
												<td ng-if="item.Priority==2"><span style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">A</span></td>
												<td ng-if="item.Priority==3"><span style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">B</span></td>
												<td  ng-if="item.Priority==4"><span style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">C</span></td>
												<td  ng-if="item.Priority==5"><span style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">D </span></td>
												<td ng-if="item.Priority==6"> <span style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">E </span></td>
												<td ng-if="item.Priority==7"><span style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">F</span></td>
												
												
												<td class=""  ng-if="item.TM_status==1">Approved</td>
												<td  class="" ng-if="item.TM_status==2">Pending</td>
												<td  class="" ng-if="item.TM_status==3">None</td>

												
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
												<td>  
												<a href="javascript:void(0)"data-toggle="modal" data-target="#SmyModal{{$index}}">{{item.Secondaryword| limitTo:20}}...</a>
												<div class="modal fade" id="SmyModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Secondaryword}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div>
												
												
												</td>
												<td>
												<a href="javascript:void(0)"data-toggle="modal" data-target="#NmyModal{{$index}}">{{item.Niche_tags| limitTo:20}}...</a>
												<div class="modal fade" id="NmyModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Niche_tags}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div>
												
												
												</td>
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
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/idea_edit/{{item.id}}">Edit</a>
												<a href="javascript:void(0)" class="delete_button"  ng-click="delete(item.id)">Delete</a></td>
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
    </div>
	
    </section>
    <!-- /.content -->
  </div>
  
  <!--<div ng-controller="PaginationDemoCtrl" ng-app="">
  Page No:<select ng-model="currentPage">
       <option ng-repeat="pg in getpagesArray(pages) track by $index">{{$index+1}}</option>
       </select>
  <table class="table">
    <tr ng-repeat="row in data.slice(((currentPage-1)*itemsPerPage), ((currentPage)*itemsPerPage))">
      <td>{{row.name}}</td>
      <td>{{row.id}}</td>
    </tr>
  </table>
</div>-->
  
 <script>
 var app = angular.module("myApp",[]);
 app.controller("productidea",function($scope,$http,$window){
	  
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
	 //$scope.itemsPerPage = 5;
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
	  url:'<?php echo base_url();?>index.php/createproduct/get_idea_list', 
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data);
		 $scope.idealist=data; 
		 // $scope.data = [{"name":"Bell","id":"K0H 2V5"},{"name":"Octavius","id":"X1E 6J0"},{"name":"Alexis","id":"N6E 1L6"},{"name":"Colton","id":"U4O 1H4"},{"name":"Abdul","id":"O9Z 2Q8"},{"name":"Ian","id":"Q7W 8M4"},{"name":"Eden","id":"H8X 5E0"},{"name":"Britanney","id":"I1Q 1O1"},{"name":"Ulric","id":"K5J 1T0"},{"name":"Geraldine","id":"O9K 2M3"},{"name":"Hamilton","id":"S1D 3O0"},{"name":"Melissa","id":"H9L 1B7"},{"name":"Remedios","id":"Z3C 8P4"},{"name":"Ignacia","id":"K3B 1Q4"},{"name":"Jaime","id":"V6O 7C9"},{"name":"Savannah","id":"L8B 8T1"},{"name":"Declan","id":"D5Q 3I9"},{"name":"Skyler","id":"I0O 4O8"},{"name":"Lawrence","id":"V4K 0L2"},{"name":"Yael","id":"R5E 9D9"},{"name":"Herrod","id":"V5W 6L3"},{"name":"Lydia","id":"G0E 2K3"},{"name":"Tobias","id":"N9P 2V5"},{"name":"Wing","id":"T5M 0E2"},{"name":"Callum","id":"L9P 3W5"},{"name":"Tiger","id":"R9A 4E4"},{"name":"Summer","id":"R4B 4Q4"},{"name":"Beverly","id":"M5E 4V4"},{"name":"Xena","id":"I8G 6O1"},{"name":"Yael","id":"L1K 5C3"},{"name":"Stacey","id":"A4G 1S4"},{"name":"Marsden","id":"T1J 5J3"},{"name":"Uriah","id":"S9S 8I7"},{"name":"Kamal","id":"Y8Z 6X0"},{"name":"MacKensie","id":"W2N 7P9"},{"name":"Amelia","id":"X7A 0U3"},{"name":"Xavier","id":"B8I 6C9"},{"name":"Whitney","id":"H4M 9U2"},{"name":"Linus","id":"E2W 7U1"},{"name":"Aileen","id":"C0C 3N2"},{"name":"Keegan","id":"V1O 6X2"},{"name":"Leonard","id":"O0L 4M4"},{"name":"Honorato","id":"F4M 8M6"},{"name":"Zephr","id":"I2E 1T9"},{"name":"Karen","id":"H8W 4I7"},{"name":"Orlando","id":"L8R 0U4"},{"name":"India","id":"N8M 8F4"},{"name":"Luke","id":"Q4Y 2Y8"},{"name":"Sophia","id":"O7F 3F9"},{"name":"Faith","id":"B8P 1U5"},{"name":"Dara","id":"J4A 0P3"},{"name":"Caryn","id":"D5M 8Y8"},{"name":"Colton","id":"A4Q 2U1"},{"name":"Kelly","id":"J2E 2L3"},{"name":"Victor","id":"H1V 8Y5"},{"name":"Clementine","id":"Q9R 4G8"},{"name":"Dale","id":"Q1S 3I0"},{"name":"Xavier","id":"Z0N 0L5"},{"name":"Quynn","id":"D1V 7B8"},{"name":"Christine","id":"A2X 0Z8"},{"name":"Matthew","id":"L1H 2I4"},{"name":"Simon","id":"L2Q 7V7"},{"name":"Evan","id":"Z8Y 6G8"},{"name":"Zachary","id":"F4K 8V9"},{"name":"Deborah","id":"I0D 4J6"},{"name":"Carl","id":"X7H 3J3"},{"name":"Colin","id":"C8P 0O1"},{"name":"Xenos","id":"K3S 1H5"},{"name":"Sonia","id":"W9C 0N3"},{"name":"Arsenio","id":"B0M 2G6"},{"name":"Angela","id":"N9X 5O7"},{"name":"Cassidy","id":"T8T 0Q5"},{"name":"Sebastian","id":"Y6O 0A5"},{"name":"Bernard","id":"P2K 0Z5"},{"name":"Kerry","id":"T6S 4T7"},{"name":"Uriel","id":"K6G 5V2"},{"name":"Wanda","id":"S9G 2E5"},{"name":"Drake","id":"G3G 8Y2"},{"name":"Mia","id":"E4F 4V8"},{"name":"George","id":"K7Y 4L4"},{"name":"Blair","id":"Z8E 0F0"},{"name":"Phelan","id":"C5Z 0C7"},{"name":"Margaret","id":"W6F 6Y5"},{"name":"Xaviera","id":"T5O 7N5"},{"name":"Willow","id":"W6K 3V0"},{"name":"Alden","id":"S2M 8C1"},{"name":"May","id":"L5B 2H3"},{"name":"Amaya","id":"Q3B 7P8"},{"name":"Julian","id":"W6T 7I6"},{"name":"Colby","id":"N3Q 9Z2"},{"name":"Cole","id":"B5G 0V7"},{"name":"Lana","id":"O3I 2W9"},{"name":"Dieter","id":"J4A 9Y6"},{"name":"Rowan","id":"I7E 9U4"},{"name":"Abraham","id":"S7V 0W9"},{"name":"Eleanor","id":"K7K 9P4"},{"name":"Martina","id":"V0Z 5Q7"},{"name":"Kelsie","id":"R7N 7P2"},{"name":"Hedy","id":"B7E 7F2"},{"name":"Hakeem","id":"S5P 3P6"}];
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
	var valueThatCameFromServer=25; 
	
	$scope.itemsPerPage=valueThatCameFromServer.toString();; 
	 
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

 
 /* app.controller("PaginationDemoCtrl",function($scope,$http,$window){
	   $scope.data = [{"name":"Bell","id":"K0H 2V5"},{"name":"Octavius","id":"X1E 6J0"},{"name":"Alexis","id":"N6E 1L6"},{"name":"Colton","id":"U4O 1H4"},{"name":"Abdul","id":"O9Z 2Q8"},{"name":"Ian","id":"Q7W 8M4"},{"name":"Eden","id":"H8X 5E0"},{"name":"Britanney","id":"I1Q 1O1"},{"name":"Ulric","id":"K5J 1T0"},{"name":"Geraldine","id":"O9K 2M3"},{"name":"Hamilton","id":"S1D 3O0"},{"name":"Melissa","id":"H9L 1B7"},{"name":"Remedios","id":"Z3C 8P4"},{"name":"Ignacia","id":"K3B 1Q4"},{"name":"Jaime","id":"V6O 7C9"},{"name":"Savannah","id":"L8B 8T1"},{"name":"Declan","id":"D5Q 3I9"},{"name":"Skyler","id":"I0O 4O8"},{"name":"Lawrence","id":"V4K 0L2"},{"name":"Yael","id":"R5E 9D9"},{"name":"Herrod","id":"V5W 6L3"},{"name":"Lydia","id":"G0E 2K3"},{"name":"Tobias","id":"N9P 2V5"},{"name":"Wing","id":"T5M 0E2"},{"name":"Callum","id":"L9P 3W5"},{"name":"Tiger","id":"R9A 4E4"},{"name":"Summer","id":"R4B 4Q4"},{"name":"Beverly","id":"M5E 4V4"},{"name":"Xena","id":"I8G 6O1"},{"name":"Yael","id":"L1K 5C3"},{"name":"Stacey","id":"A4G 1S4"},{"name":"Marsden","id":"T1J 5J3"},{"name":"Uriah","id":"S9S 8I7"},{"name":"Kamal","id":"Y8Z 6X0"},{"name":"MacKensie","id":"W2N 7P9"},{"name":"Amelia","id":"X7A 0U3"},{"name":"Xavier","id":"B8I 6C9"},{"name":"Whitney","id":"H4M 9U2"},{"name":"Linus","id":"E2W 7U1"},{"name":"Aileen","id":"C0C 3N2"},{"name":"Keegan","id":"V1O 6X2"},{"name":"Leonard","id":"O0L 4M4"},{"name":"Honorato","id":"F4M 8M6"},{"name":"Zephr","id":"I2E 1T9"},{"name":"Karen","id":"H8W 4I7"},{"name":"Orlando","id":"L8R 0U4"},{"name":"India","id":"N8M 8F4"},{"name":"Luke","id":"Q4Y 2Y8"},{"name":"Sophia","id":"O7F 3F9"},{"name":"Faith","id":"B8P 1U5"},{"name":"Dara","id":"J4A 0P3"},{"name":"Caryn","id":"D5M 8Y8"},{"name":"Colton","id":"A4Q 2U1"},{"name":"Kelly","id":"J2E 2L3"},{"name":"Victor","id":"H1V 8Y5"},{"name":"Clementine","id":"Q9R 4G8"},{"name":"Dale","id":"Q1S 3I0"},{"name":"Xavier","id":"Z0N 0L5"},{"name":"Quynn","id":"D1V 7B8"},{"name":"Christine","id":"A2X 0Z8"},{"name":"Matthew","id":"L1H 2I4"},{"name":"Simon","id":"L2Q 7V7"},{"name":"Evan","id":"Z8Y 6G8"},{"name":"Zachary","id":"F4K 8V9"},{"name":"Deborah","id":"I0D 4J6"},{"name":"Carl","id":"X7H 3J3"},{"name":"Colin","id":"C8P 0O1"},{"name":"Xenos","id":"K3S 1H5"},{"name":"Sonia","id":"W9C 0N3"},{"name":"Arsenio","id":"B0M 2G6"},{"name":"Angela","id":"N9X 5O7"},{"name":"Cassidy","id":"T8T 0Q5"},{"name":"Sebastian","id":"Y6O 0A5"},{"name":"Bernard","id":"P2K 0Z5"},{"name":"Kerry","id":"T6S 4T7"},{"name":"Uriel","id":"K6G 5V2"},{"name":"Wanda","id":"S9G 2E5"},{"name":"Drake","id":"G3G 8Y2"},{"name":"Mia","id":"E4F 4V8"},{"name":"George","id":"K7Y 4L4"},{"name":"Blair","id":"Z8E 0F0"},{"name":"Phelan","id":"C5Z 0C7"},{"name":"Margaret","id":"W6F 6Y5"},{"name":"Xaviera","id":"T5O 7N5"},{"name":"Willow","id":"W6K 3V0"},{"name":"Alden","id":"S2M 8C1"},{"name":"May","id":"L5B 2H3"},{"name":"Amaya","id":"Q3B 7P8"},{"name":"Julian","id":"W6T 7I6"},{"name":"Colby","id":"N3Q 9Z2"},{"name":"Cole","id":"B5G 0V7"},{"name":"Lana","id":"O3I 2W9"},{"name":"Dieter","id":"J4A 9Y6"},{"name":"Rowan","id":"I7E 9U4"},{"name":"Abraham","id":"S7V 0W9"},{"name":"Eleanor","id":"K7K 9P4"},{"name":"Martina","id":"V0Z 5Q7"},{"name":"Kelsie","id":"R7N 7P2"},{"name":"Hedy","id":"B7E 7F2"},{"name":"Hakeem","id":"S5P 3P6"}];
  $scope.totalItems = $scope.data.length;
  $scope.currentPage = 1;
  $scope.itemsPerPage = 10;
  $scope.pages=Math.ceil($scope.data.length/ $scope.itemsPerPage);
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
 }); */
/* angular.module('pagination', []);
var PaginationDemoCtrl = function ($scope) { 
  $scope.data = [{"name":"Bell","id":"K0H 2V5"},{"name":"Octavius","id":"X1E 6J0"},{"name":"Alexis","id":"N6E 1L6"},{"name":"Colton","id":"U4O 1H4"},{"name":"Abdul","id":"O9Z 2Q8"},{"name":"Ian","id":"Q7W 8M4"},{"name":"Eden","id":"H8X 5E0"},{"name":"Britanney","id":"I1Q 1O1"},{"name":"Ulric","id":"K5J 1T0"},{"name":"Geraldine","id":"O9K 2M3"},{"name":"Hamilton","id":"S1D 3O0"},{"name":"Melissa","id":"H9L 1B7"},{"name":"Remedios","id":"Z3C 8P4"},{"name":"Ignacia","id":"K3B 1Q4"},{"name":"Jaime","id":"V6O 7C9"},{"name":"Savannah","id":"L8B 8T1"},{"name":"Declan","id":"D5Q 3I9"},{"name":"Skyler","id":"I0O 4O8"},{"name":"Lawrence","id":"V4K 0L2"},{"name":"Yael","id":"R5E 9D9"},{"name":"Herrod","id":"V5W 6L3"},{"name":"Lydia","id":"G0E 2K3"},{"name":"Tobias","id":"N9P 2V5"},{"name":"Wing","id":"T5M 0E2"},{"name":"Callum","id":"L9P 3W5"},{"name":"Tiger","id":"R9A 4E4"},{"name":"Summer","id":"R4B 4Q4"},{"name":"Beverly","id":"M5E 4V4"},{"name":"Xena","id":"I8G 6O1"},{"name":"Yael","id":"L1K 5C3"},{"name":"Stacey","id":"A4G 1S4"},{"name":"Marsden","id":"T1J 5J3"},{"name":"Uriah","id":"S9S 8I7"},{"name":"Kamal","id":"Y8Z 6X0"},{"name":"MacKensie","id":"W2N 7P9"},{"name":"Amelia","id":"X7A 0U3"},{"name":"Xavier","id":"B8I 6C9"},{"name":"Whitney","id":"H4M 9U2"},{"name":"Linus","id":"E2W 7U1"},{"name":"Aileen","id":"C0C 3N2"},{"name":"Keegan","id":"V1O 6X2"},{"name":"Leonard","id":"O0L 4M4"},{"name":"Honorato","id":"F4M 8M6"},{"name":"Zephr","id":"I2E 1T9"},{"name":"Karen","id":"H8W 4I7"},{"name":"Orlando","id":"L8R 0U4"},{"name":"India","id":"N8M 8F4"},{"name":"Luke","id":"Q4Y 2Y8"},{"name":"Sophia","id":"O7F 3F9"},{"name":"Faith","id":"B8P 1U5"},{"name":"Dara","id":"J4A 0P3"},{"name":"Caryn","id":"D5M 8Y8"},{"name":"Colton","id":"A4Q 2U1"},{"name":"Kelly","id":"J2E 2L3"},{"name":"Victor","id":"H1V 8Y5"},{"name":"Clementine","id":"Q9R 4G8"},{"name":"Dale","id":"Q1S 3I0"},{"name":"Xavier","id":"Z0N 0L5"},{"name":"Quynn","id":"D1V 7B8"},{"name":"Christine","id":"A2X 0Z8"},{"name":"Matthew","id":"L1H 2I4"},{"name":"Simon","id":"L2Q 7V7"},{"name":"Evan","id":"Z8Y 6G8"},{"name":"Zachary","id":"F4K 8V9"},{"name":"Deborah","id":"I0D 4J6"},{"name":"Carl","id":"X7H 3J3"},{"name":"Colin","id":"C8P 0O1"},{"name":"Xenos","id":"K3S 1H5"},{"name":"Sonia","id":"W9C 0N3"},{"name":"Arsenio","id":"B0M 2G6"},{"name":"Angela","id":"N9X 5O7"},{"name":"Cassidy","id":"T8T 0Q5"},{"name":"Sebastian","id":"Y6O 0A5"},{"name":"Bernard","id":"P2K 0Z5"},{"name":"Kerry","id":"T6S 4T7"},{"name":"Uriel","id":"K6G 5V2"},{"name":"Wanda","id":"S9G 2E5"},{"name":"Drake","id":"G3G 8Y2"},{"name":"Mia","id":"E4F 4V8"},{"name":"George","id":"K7Y 4L4"},{"name":"Blair","id":"Z8E 0F0"},{"name":"Phelan","id":"C5Z 0C7"},{"name":"Margaret","id":"W6F 6Y5"},{"name":"Xaviera","id":"T5O 7N5"},{"name":"Willow","id":"W6K 3V0"},{"name":"Alden","id":"S2M 8C1"},{"name":"May","id":"L5B 2H3"},{"name":"Amaya","id":"Q3B 7P8"},{"name":"Julian","id":"W6T 7I6"},{"name":"Colby","id":"N3Q 9Z2"},{"name":"Cole","id":"B5G 0V7"},{"name":"Lana","id":"O3I 2W9"},{"name":"Dieter","id":"J4A 9Y6"},{"name":"Rowan","id":"I7E 9U4"},{"name":"Abraham","id":"S7V 0W9"},{"name":"Eleanor","id":"K7K 9P4"},{"name":"Martina","id":"V0Z 5Q7"},{"name":"Kelsie","id":"R7N 7P2"},{"name":"Hedy","id":"B7E 7F2"},{"name":"Hakeem","id":"S5P 3P6"}];
  $scope.totalItems = $scope.data.length;
  $scope.currentPage = 1;
  $scope.itemsPerPage = 10;
  $scope.pages=Math.ceil($scope.data.length/ $scope.itemsPerPage);
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
}; */


 </script>
 <script>
var d = document.getElementById("ideas");
d.className += " active";
</script>