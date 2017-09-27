<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>ToDo Upload Products</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">ToDo Upload</li>
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
                                        <li role="presentation" class="active"  ><a  href="<?php echo base_url();?>index.php/createproduct/upload_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation"><a  href="<?php echo base_url();?>index.php/createproduct/upload_product_list" aria-controls="profile" role="tab" > Review</a>
										</li>
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										
												 <div class="row table_title " >
									
									   <div class="col-xs-2 col-centered col-min">
											   Design Example Image:
										</div>
										<div class="col-xs-3 col-centered col-min">
											   Ideas
										</div>    

										<div class="col-xs-3 col-centered col-min">
											  Designs
										</div>  
										<div class="col-xs-2 col-centered col-min">
											  Copywrites
										</div> 
										<div class="col-xs-2 col-centered col-min">
										Action
										</div>										
									</div>
									<div class="row " ng-repeat="item in idealist " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
									
									    <div class="col-xs-2 col-centered col-min">
											  <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url();?>{{item.Thumbnail}}">
													<img class="thumb" src="<?php echo base_url();?>{{item.Thumbnail}}" style="width:89%;"/>
                   
												</a>
											  
											  
										</div>
										<div class="col-xs-3 col-centered col-min">
										
										 <div>
										      
											  <input type="checkbox" class="read-more-state" id="ideapost-{{$index}}" />

											  <ul class="read-more-wrap">
											    <li ng-if="item.Idea_status==1">
										 <img class="thumb" src="<?php echo base_url();?>images/pending.png" style="width:30px;"/>
							             </li>
										 <li ng-if="item.Idea_status==2"> <img class="thumb" src="<?php echo base_url();?>images/error.png" style="width:30px;"/></li>
										 <li  ng-if="item.Idea_status==3"> <img class="thumb" src="<?php echo base_url();?>images/approved.png" style="width:30px;"/></li>
												<li><b>IdeaMan:</b> {{item.admin_first_name}} {{item.admin_last_name}}</li>
												<li><b>IdeaUrl</b><a target="_blank" href="http://{{item.idea_url}}">{{item.idea_url}}</a></li>
												<li><b>Created Date:</b>{{item.idea_post_time}}</li>
												<li><b>ProductId:</b>{{item.product_number}}</li>
												
												<li class="read-more-target"> <b>BSR:</b> {{item.BSR}}</li>
										    
											<li class="read-more-target" class="read-more-target" ng-if="item.Priority==1" style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> A+</li>
											<li class="read-more-target" class="read-more-target" ng-if="item.Priority==2"style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> A</li>
											<li class="read-more-target"class="read-more-target" ng-if="item.Priority==3"style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> B</li>
											<li class="read-more-target" ng-if="item.Priority==4"style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> C</li>
											<li class="read-more-target" ng-if="item.Priority==5"style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> D</li>
											<li class="read-more-target" ng-if="item.Priority==6"style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> E</li>
											<li class="read-more-target"ng-if="item.Priority==6"style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff;"><b>Priority:</b> F</li>

											<li class="read-more-target"  ng-if="item.TM_status==1"><b>TM:</b> Approved</li>
											<li  class="read-more-target" ng-if="item.TM_status==2"><b>TM:</b> Pending</li>
											<li  class="read-more-target" ng-if="item.TM_status==3"><b>TM:</b> None</li>
											
											<li class="read-more-target" ><b>P-Keyword:</b> {{item.Primaryword}}</li>
											    <li class="read-more-target"><b>S-Keyword:</b>{{item.Secondaryword}}</li>
											     <li class="read-more-target"><b>Tags:</b>{{item.Niche_tags}}</li>
												  <li class="read-more-target" ><b>Notes:</b>{{item.Notes}}</li>
											  
											  
											  </ul>
											  
											  <label for="ideapost-{{$index}}" class="read-more-trigger"></label>
											</div>
										
										
										         
										</div>
										<div class="col-xs-3 col-centered col-min">
										  <div>
											  <input type="checkbox" class="read-more-state" id="designpost-{{$index}}" />

											  <ul class="read-more-wrap">
											    <li ng-if="item.design_status==1"><img class="thumb" src="<?php echo base_url();?>images/pending.png" style="width:30px;"/></li>
										   <li  ng-if="item.design_status==2"><img class="thumb" src="<?php echo base_url();?>images/error.png" style="width:30px;"/></li>
										   <li ng-if="item.design_status==3"><img class="thumb" src="<?php echo base_url();?>images/approved.png" style="width:30px;"/></li>
												<li><b>Designer:</b> {{item.designer_first_name}} {{item.designer_last_name}}</li>
												<li> <b>Proof Me Link:</b>{{item.proof_me_link}}</li>
												<li> <b>Created At:</b>{{item.design_post_time}}</li>
												<li><b>ProductId:</b>{{item.product_number}}</li>
												<li class="read-more-target"><b>File Name/Number:</b>{{item.fileinfo}}</li>
												<li class="read-more-target"> <b>Drive Link to PNG:</b>{{item.drive_link_to_png}}</li>
												
												 <li class="read-more-target" ng-if="item.design_level==1"><b>Level:</b> Level1</li>
											 <li class="read-more-target" ng-if="item.design_level==2"><b>Level:</b> Level2</li>
											 <li class="read-more-target"  ng-if="item.design_level==3"><b>Level:</b> Level3</li>
											 
											 <li class="read-more-target">
											       <div class="foo" style="background: #{{item.color1}};"></div>
													<div class="foo" style="background: #{{item.color2}};"></div>
													<div class="foo" style="background: #{{item.color3}};"></div>
													<div class="foo" style="background: #{{item.color4}};"></div>
													<div class="foo" style="background: #{{item.color5}};"></div>
											</li>
											  
												
											  </ul>
											  
											  <label for="designpost-{{$index}}" class="read-more-trigger"></label>
											</div>
										   
										   
										   
										    
										    
												
											
										         
										</div>
										<div class="col-xs-2 col-centered col-min"> 
											
										   
										   <div>
											  <input type="checkbox" class="read-more-state" id="copypost-{{$index}}" />

											  <ul class="read-more-wrap">
											   <li  ng-if="item.Copy_status==1"><img class="thumb" src="<?php echo base_url();?>images/pending.png" style="width:30px;"/></li>
										   <li  ng-if="item.Copy_status==2"><img class="thumb" src="<?php echo base_url();?>images/error.png" style="width:30px;"/></li>
										   <li  ng-if="item.Copy_status==3"><img class="thumb" src="<?php echo base_url();?>images/approved.png" style="width:30px;"/></li>
												<li><b>Copy Writer:</b> {{item.copy_first_name}} {{item.copy_last_name}}</li>
												<li><b>Brand Name:</b>{{item.Brand_Name}}</li>
												<li> <b>Created At:</b>{{item.copy_post_time}}</li>
												<li><b>ProductId:</b>{{item.product_number}}</li>
												<li class="read-more-target"><b>Title:</b>{{item.Title}}</li>
												<li class="read-more-target"><b>Price:</b>{{item.Price}}</li>
												<li class="read-more-target"><b>Bullet1:</b>{{item.Bullet1}}</li>
												<li class="read-more-target"><b>Bullet2:</b>{{item.Bullet2}}</li>
												<li class="read-more-target"><b>Product Description:</b>{{item.Product_description}}</li>
											  </ul>
											  
											  <label for="copypost-{{$index}}" class="read-more-trigger"></label>
											</div>
										   
										</div>
										
										<div class="col-xs-2 col-centered col-min"> 
											<a class="btn btn-primary"  href="<?php echo base_url();?>index.php/createproduct/upload_product/{{item.id}}">Upload Product</a>
										</div>
										
									</div>
			                           
										<div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;" ng-show="!idealist.length">No Result Found!</div>
										
										
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
	  url:'<?php echo base_url();?>index.php/createproduct/get_idea_list_toupload',
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