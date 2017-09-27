<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Design List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">DesignList</li>
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
                                       <li role="presentation"   ><a  href="<?php echo base_url();?>index.php/createproduct/design_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation" class="active"><a  href="<?php echo base_url();?>index.php/createproduct/design_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										
										<div class="container">
										<table class="table">
											<thead>
											  <tr class="table_title">
												
												<th>ProductId</th>
												<th>Designer</th>
												
												<th>Proof Me Link</th>
												
												<th>Date</th>
												
												<th>File Name/Number</th>
												<th>Drive Link to PNG</th>
												
												
												<th>Level</th>
												<th>Color</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr ng-repeat="item in idealist ">
												
												<td>T0{{item.id}}</td>
												
												
												<td>{{item.designer_first_name}} {{item.designer_last_name}}</td>
												<td>{{item.proof_me_link}}
												</td>
												<td>{{item.design_post_time}}</td>
												<td>{{item.fileinfo}}</td>
												<td>{{item.drive_link_to_png}}</td>
											 <td  ng-if="item.design_level==1"> Level1</td>
											 <td ng-if="item.design_level==2"> Level2</td>
											 <td ng-if="item.design_level==3">Level3</td>
												<td>
												
											       <div class="foo" style="background: #{{item.color1}};"></div>
													<div class="foo" style="background: #{{item.color2}};"></div>
													<div class="foo" style="background: #{{item.color3}};"></div>
													<div class="foo" style="background: #{{item.color4}};"></div>
													<div class="foo" style="background: #{{item.color5}};"></div>
											
											</td>
												
												
												
												
												
												
												<td>
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/design_add/{{item.id}}">Edit</a>|
											<a href="javascript:void(0)" class="delete_button"  ng-click="delete(item.id)">Delete</a>
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
    </div>
	
    </section>
    <!-- /.content -->
  </div>
 <script>
 var app = angular.module("myApp",[]);
 app.controller("productidea",function($scope,$http,$window){
	 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/createproduct/get_design_list',
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
        url : '<?php echo base_url();?>index.php/createproduct/design_delete',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/createproduct/design_list";
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
var d = document.getElementById("design");
d.className += " active";
</script>