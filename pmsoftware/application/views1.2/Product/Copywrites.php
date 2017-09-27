<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Copywrite List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">CopywriteList</li>
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
                                        <li role="presentation"  ><a  href="<?php echo base_url();?>index.php/createproduct/copy_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation" class="active"  ><a  href="<?php echo base_url();?>index.php/createproduct/copy_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										<div class="container">
										<table class="table">
											<thead>
											  <tr class="table_title">
												
												<th>Product-Id</th>
												<th>Copywriter</th>
												
												<th>Brand Name</th>
												
												<th>Date</th>
												
												<th>Title</th>
												<th>Price</th>
												
												
												<th>Bullet1</th>
												<th>Bullet2</th>
												<th>Product Description</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr ng-repeat="item in idealist ">
												
												<td>T0{{item.id}}</td>
												
												
												<td>{{item.copy_first_name}} {{item.copy_last_name}}</td>
												<td>{{item.Brand_Name}}
												</td>
												<td>{{item.copy_post_time}}</td>
												<td>{{item.Title}}</td>
												<td>{{item.Price}}</td>
												<td>{{item.Bullet1}}</td>
												<td>{{item.Bullet1}}</td>
												<td>{{item.Product_description}}</td>
											 
												
												
												
												
												
												
												<td>
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/copy_add/{{item.id}}">Edit</a>|
											<a href="javascript:void(0)" class="delete_button"  ng-click="delete(item.id)">Delete</a>
												</td>
											  </tr>      
											  <tr ng-show="!idealist.length">
											  <td colspan="10" style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">No Result Found!</td>
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
	  url:'<?php echo base_url();?>index.php/createproduct/get_copy_list',
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
        url : '<?php echo base_url();?>index.php/createproduct/copy_delete',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/createproduct/copy_list";
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
var d = document.getElementById("copy");
d.className += " active";
</script>