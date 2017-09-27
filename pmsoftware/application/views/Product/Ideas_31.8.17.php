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
										<h4>Filter By
										<b>Url:</b><input ng-model="search.idea_url" />
										<b>BSR:</b><input ng-model="search.BSR" />
										<b>Name:</b><input ng-model="search.admin_first_name" /></h4>
										<table class="table">
											<thead>
											  <tr class="table_title">
												
												<!--<th>Image</th>-->
												<th style="width: 10%;">Thumbnail</th>
												<th>Date</th>
												<th style="width: 8%;">T-shirt ID</th>
												<th style="width: 8%;">Idea Man</th>
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
										<tr ng-repeat="item in idealist | filter:search">
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
 <script>
 var app = angular.module("myApp",[]);
 app.controller("productidea",function($scope,$http,$window){
	 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/createproduct/get_idea_list',
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
var d = document.getElementById("ideas");
d.className += " active";
</script>