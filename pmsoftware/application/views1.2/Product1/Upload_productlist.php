<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Upload Products List</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">UploadProductList</li>
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
                                        <li role="presentation"   ><a  href="<?php echo base_url();?>index.php/createproduct/upload_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation" class="active"><a  href="<?php echo base_url();?>index.php/createproduct/upload_product_list" aria-controls="profile" role="tab" > Review</a>
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
												<th>Uploader Man</th>
												<th>Date</th>
												<th>Merch by Amazon Account 1</th>
												<th>Merch by Amazon Account 2</th>
												<th>Redbubble</th>
												
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr ng-repeat="item in idealist ">
												
												<td>{{item.product_number}}</td>
												
												
												<td>{{item.uploder_first_name}} {{item.uploder_last_name}}</td>
												
												<td>{{item.upload_post_time}}</td>
												
												
												 <td  ng-if="item.Upload_status==1"> Draft</td>
												 <td  ng-if="item.Upload_status==2"> Live</td>
												 <td  ng-if="item.Upload_status==3"> Rejected</td>
												 <td  ng-if="item.Upload_status==4"> Removed</td>
												 <td  ng-if="item.Upload_status==5"> Deleted</td>
												 <td  ng-if="item.Upload_status==6"> Private</td>
												
												
												<td  ng-if="item.Upload_status2==1"> Draft</td>
												 <td  ng-if="item.Upload_status2==2"> Live</td>
												 <td  ng-if="item.Upload_status2==3"> Rejected</td>
												 <td  ng-if="item.Upload_status2==4"> Removed</td>
												 <td  ng-if="item.Upload_status2==5"> Deleted</td>
												 <td  ng-if="item.Upload_status2==6"> Private</td>
												
												<td  ng-if="item.Upload_status3==1"> Draft</td>
												 <td  ng-if="item.Upload_status3==2"> Live</td>
												 <td  ng-if="item.Upload_status3==3"> Rejected</td>
												 <td  ng-if="item.Upload_status3==4"> Removed</td>
												 <td  ng-if="item.Upload_status3==5"> Deleted</td>
												 <td  ng-if="item.Upload_status3==6"> Private</td>
												
												
												
											 
												
												
												
												
												
												
												<td>
												<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/upload_product/{{item.id}}">Edit</a>
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
	  url:'<?php echo base_url();?>index.php/createproduct/get_upload_list',
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
 <script>
var d = document.getElementById("upload");
d.className += " active";
</script>