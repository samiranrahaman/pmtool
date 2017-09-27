
<div class="content-wrapper" ng-init='init()' ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Design Phase</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">DesignAdd</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
       <!--<a href="<?php echo base_url();?>manageaccount/payment_list"><h4>Payment List</h4></a> -->
	<div class="container">
			<div class="row row-centered">
			<?php //echo $data[0]->color1;?>
			<div class="row">
		                                <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li role="presentation"  class="active" ><a  href="<?php echo base_url();?>index.php/createproduct/design_todo_list" aria-controls="home" role="tab" >To Do</a>
										</li>
                                        <li role="presentation" ><a  href="<?php echo base_url();?>index.php/createproduct/design_list" aria-controls="profile" role="tab" > Review</a>
										</li>
										
										<!--<li role="presentation" class="btn btn-primary" style="float: right; color: #fff;" ><a  target="_blank" href="<?php echo base_url();?>index.php/createproduct/get_preview/{{id}}" aria-controls="profile" role="tab" > Preview</a>
										</li>-->
                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										
										<div class="row row_custom" >
									
									   <div class="col-xs-6 col-centered col-min">
											   <img src="<?php echo base_url();?><?php echo $data[0]->Thumbnail ;?>" style="width:74%;"/>
										</div>
										<div class="col-xs-6 col-centered col-min">
											   <p><b>IdeaUrl:</b> <a href="http://<?php echo $data[0]->idea_url ;?>" target="_blank"><?php echo $data[0]->idea_url ;?></a></p>
											   
												
												<?php if($data[0]->Priority==1) {?>
												<p><span style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">A+</span></p>
												<?php } ?>
												<?php if($data[0]->Priority==2) {?>
												<p><span style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">A</span></p>
												<?php } ?>
												<?php if($data[0]->Priority==3) {?>
												
												<p><span style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">B</span></p>
												<?php } ?>
												<?php if($data[0]->Priority==4) {?>
												<p><span style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">C</span>
												</p>
												<?php } ?>
												<?php if($data[0]->Priority==5) {?>
												
												<p><span style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">D </span></p>
												<?php } ?>
												<?php if($data[0]->Priority==6) {?>
												<p> <span style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">E </span></p>
												<?php } ?>
												<?php if($data[0]->Priority==7) {?>
												<p><span style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">F</span></p>
												<?php } ?>
												<!--<p><b>P-Keyword:</b> <?php echo $data[0]->Primaryword;?></p>
												<p><b>S-Keyword:</b> <?php echo $data[0]->Secondaryword;?></p>-->
												<p><b>Note:</b> <?php echo $data[0]->Notes;?></p>
												
												
												
										</div>    
									
									   
									   
									   </div>
										
										<div class="row" style="margin-top: 24px;">
										<!--<p class="btn btn-primary" style="float: right; margin-right: 29px;color: #fff;"><a  target="_blank" href="<?php echo base_url();?>index.php/createproduct/get_preview/{{id}}" aria-controls="profile" role="tab" > Preview</a></p>-->
										<div class="col-xs-12 col-centered col-min">
										<div class="col-xs-4 col-centered col-min">											
										<div class="form-group" ng-controller="myCtrl">												
										<label for="sel1">Design Image:</label>
										
										<!--<input type = "file" file-model = "myFile"/>											 
										 <div id="imgpreview">
											 <?php if($data[0]->drive_link_to_png!='') {?>

														 <img class="thumb" src="<?php echo base_url();?><?php echo $data[0]->drive_link_to_png;?>" style="width: 355px;padding: 9px 7px 13px 3px;"/>

														 <?php } ?>
									     </div>											
									<button class="btn btn-primary" ng-click = "uploadFile()">Upload</button>-->

									<input type="file" ng-model="fileUpload" onchange="angular.element(this).scope().setFiles(this)"/>
									<div id="imgpreview">
											 <?php if($data[0]->drive_link_to_png!='') {?>

														 <img class="thumb" src="<?php echo base_url();?><?php echo $data[0]->drive_link_to_png;?>" style="width: 355px;padding: 9px 7px 13px 3px;"/>

														 <?php } else {?>
														 <img class="thumb" src="<?php echo base_url();?>images/requireimages/images_demo.jpg" style="width: 355px;padding: 9px 7px 13px 3px;"/>
														 <?php } ?>
									 </div>
									
									</div>										
									</div>				
									<div class="col-xs-4 col-centered col-min">
										<form  id="createproduct" name="createproduct" ng-submit="productform()" novalidate >
				<input type="hidden" class="form-control"  id="id" name="id" ng-model="id" ng-value="id" required>
				<input type="hidden" class="form-control"  id="noofcolorchoose" value="" name="noofcolorchoose">
				
				
					
						
						
						<?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.design_man.$invalid && !createproduct.design_man.$pristine }">
					  
								<label for="sel1">Designer: <span style="color: red;">*</span></label>
								
							 <select class="form-control" id="design_man" name="design_man"  required ng-model="design_man"
								ng-options="opt.id as opt.name for opt in userlist">
							</select>
							
						<p ng-show="createproduct.design_man.$invalid && !createproduct.design_man.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  type="hidden" class="form-control"  id="design_man" name="design_man" ng-model="design_man" ng-value="design_man" required>
					
					<?php }?>
						
						
						
						
						
						
						
						
						
					    <!--<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.proof_me_link.$invalid && !createproduct.proof_me_link.$pristine }">
							<label for="sel1">Proof me Link :</label>
							<input type="text" class="form-control" placeholder="Proof me Link" id="proof_me_link" name="proof_me_link" ng-model="proof_me_link" required> 
							<p ng-show="createproduct.proof_me_link.$invalid && !createproduct.proof_me_link.$pristine" class="help-block">Field is required.</p>
							
						</div> 
					  
						<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.fileinfo.$invalid && !createproduct.fileinfo.$pristine }">
							<label for="sel1">File Name/Number:</label>
							<input type="text" class="form-control" placeholder="File Name/Number" id="fileinfo" name="fileinfo" ng-model="fileinfo" required> 
							<p ng-show="createproduct.fileinfo.$invalid && !createproduct.fileinfo.$pristine" class="help-block">Field is required.</p>
							
						</div>--> 
						<div class="form-group has-feedback">
							<label for="sel1">Tshirt Number: <span style="color: red;">*</span></label>
							<input type="text" class="form-control" value="T0<?php echo $data[0]->id;?>" readonly required> 
							
							
						</div>
						<div class="form-group has-feedback" ng-class="{ 'has-error' : createproduct.drive_link_to_png.$invalid && !createproduct.drive_link_to_png.$pristine }">
							<label for="sel1">Drive Link to PNG : <span style="color: red;">*</span></label>
							<!--<input type="text" class="form-control" placeholder="Drive Link to PNG" id="drive_link_to_png" name="drive_link_to_png" ng-model="drive_link_to_png" required> 
							<p ng-show="createproduct.drive_link_to_png.$invalid && !createproduct.drive_link_to_png.$pristine" class="help-block">Field is required.</p>-->
							<div id="image_file"><input type="text" class="form-control"  id="drive_link_to_png" name="drive_link_to_png" ng-model="drive_link_to_png" ng-value="drive_link_to_png" readonly  ></div> 
							
							
							
						</div>
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.design_level.$invalid && !createproduct.design_level.$pristine }">
					  
								<label for="sel1">Design Level : <span style="color: red;">*</span></label> 
								
							 <!--<select class="form-control" id="design_level" name="design_level"  required ng-model="design_level"
								ng-options="opt.id as opt.name for opt in design_level_list">
							</select>-->
							<input type="radio" ng-model="design_level" value="1" required>Level1
							  <input type="radio" ng-model="design_level" value="2" required >Level2
							  <input type="radio" ng-model="design_level" value="3" required>Level3
							
						<p ng-show="createproduct.design_level.$invalid && !createproduct.design_level.$pristine" class="help-block">Field is required.</p>
					    </div>
						
						<div class="form-group"  ng-class="{ 'has-error' : createproduct.shirt_type.$invalid && !createproduct.shirt_type.$pristine }">
					  
								<label for="sel1">Shirt Type: <span style="color: red;">*</span></label>
								
							 <select class="form-control" id="shirt_type" name="shirt_type"  required ng-model="shirt_type"
								ng-options="opt.name as opt.name for opt in shirttype">
							</select>
							
						<p ng-show="createproduct.shirt_type.$invalid && !createproduct.shirt_type.$pristine" class="help-block">Field is required.</p>
					    </div>
					
					</div>
					 <div class="col-xs-4 col-centered col-min">
					    
						<div class="form-group">
								<label for="sel1">Pick Up to 5 T-Shirt Colors : <span style="color: red;">*</span></label>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								 <div id="282B2A" class="foo" onclick="colorchoose('#282B2A');" style="background: #282B2A;"></br><h5 style="padding: 4px 0px 0px 0px;">Asphalt</h5></div> 
								 <div id="89cff0" class="foo" onclick="colorchoose('#89cff0');" style="background: #89cff0;"></br><h5 style="padding: 4px 0px 0px 0px;">Baby blue</h5></div>
								 <div id="000000" class="foo" onclick="colorchoose('#000000');" style="background:#000000;"></br><h5 style="padding: 4px 0px 0px 0px;">Black</h5></div>
								 </div>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								 <div id="A52A2A" class="foo" onclick="colorchoose('#A52A2A');" style="background: #A52A2A;"></br><h5 style="padding: 4px 0px 0px 0px;">Brown</h5></div>
								 <div id="601830" class="foo" onclick="colorchoose('#601830');" style="background: #601830;"></br><h5 style="padding: 4px 0px 0px 0px;">Cranberry</h5></div>
								 <div id="3F4444" class="foo" onclick="colorchoose('#3F4444');" style="background: #3F4444;"></br><h5 style="padding: 4px 0px 0px 0px;">Dark Heather</h5></div>
								 </div>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								 <div id="009E69" class="foo" onclick="colorchoose('#009E69');" style="background: #009E69;"></br><h5 style="padding: 4px 0px 0px 0px;">Grass</h5></div>
								 <div id="00805E" class="foo" onclick="colorchoose('#00805E');" style="background: #00805E;"></br><h5 style="padding: 4px 0px 0px 0px;">Kelly Green</h5></div>
								 <div id="B6C0D2" class="foo" onclick="colorchoose('#B6C0D2');" style="background:#B6C0D2;"></br><h5 style="padding: 4px 0px 0px 0px;">Heather Blue</h5></div>
								 
								 </div>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								 <div id="BEBBBB"  class="foo" onclick="colorchoose('#BEBBBB');" style="background:#BEBBBB;"></br><h5 style="padding: 4px 0px 0px 0px;">Heather Grey</h5></div> 
								 <div id="fff44f" class="foo" onclick="colorchoose('#fff44f');" style="background: #fff44f;"></br><h5 style="padding: 4px 0px 0px 0px;">Lemon</h5></div>
								<div id="000080" class="foo" onclick="colorchoose('#000080');" style="background: #000080;"></br><h5 style="padding: 4px 0px 0px 0px;">Navy</h5></div> 
								 </div>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								 <div id="5E534E" class="foo" onclick="colorchoose('#5E534E');" style="background: #5E534E;"></br><h5 style="padding: 4px 0px 0px 0px;">Olive</h5></div> 
								<div id="DF6426" class="foo" onclick="colorchoose('#DF6426');" style="background: #DF6426;"></br><h5 style="padding: 4px 0px 0px 0px;">Orange</h5></div> 
								<div id="E16F8F" class="foo" onclick="colorchoose('#E16F8F');" style="background: #E16F8F;"></br><h5 style="padding: 4px 0px 0px 0px;">Pink</h5></div>
								 </div>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								 <div id="3F2A56" class="foo" onclick="colorchoose('#3F2A56');" style="background: #3F2A56;"></br><h5 style="padding: 4px 0px 0px 0px;">Purple</h5></div>
								<div id="B1302A" class="foo" onclick="colorchoose('#B1302A');" style="background: #B1302A;"></br><h5 style="padding: 4px 0px 0px 0px;">Red</h5></div>
								<div id="224D8F" class="foo" onclick="colorchoose('#224D8F');" style="background: #224D8F;"></br><h5 style="padding: 4px 0px 0px 0px;">Royal Blue</h5></div>
								 </div>
								 <div class="row" style="padding: 0px 0px 7px 0px;">
								<div id="C0C0C0" class="foo" onclick="colorchoose('#C0C0C0');" style="background: #C0C0C0;"></br><h5 style="padding: 4px 0px 0px 0px;">Silver</h5></div>
								<div id="778899" class="foo" onclick="colorchoose('#778899');" style="background: #778899;"></br><h5 style="padding: 4px 0px 0px 0px;">Slate</h5></div>
								<div id="ffffff" class="foo" onclick="colorchoose('#ffffff');" style="background: #ffffff;"></br><h5 style="padding: 4px 0px 0px 0px;">White</h5></div>
								
								
								  
								 
								 
							    <!--<div id="676769" class="foo" onclick="colorchoose('#676769');" style="background:#676769;"></div>
								<div id="4169e1" class="foo" onclick="colorchoose('#4169e1');" style="background: #4169e1;"></div>
								<div id="FF0000" class="foo" onclick="colorchoose('#FF0000');" style="background: #FF0000;"></div>
								<div id="264688" class="foo" onclick="colorchoose('#264688');" style="background: #264688;"></div>
								<div id="556b2f" class="foo" onclick="colorchoose('#556b2f');" style="background: #556b2f;"></div>
								
								<div id="4cbb17" class="foo" onclick="colorchoose('#4cbb17');" style="background: #4cbb17;"></div>
								<div id="FFC0CB" class="foo" onclick="colorchoose('#FFC0CB');" style="background: #FFC0CB;"></div>
								<div id="800080" class="foo" onclick="colorchoose('#800080');" style="background: #800080;"></div>-->
								
								
								
								<input type="hidden" id="color0" value="" name="color0">
								<input type="hidden" id="color1" value="" name="color1">
								<input type="hidden" id="color2" value="" name="color2">
								<input type="hidden" id="color3" value="" name="color3">
								<input type="hidden" id="color4" value="" name="color4">
								
								
								
								
								
								
								
								
								
								
								
								</div>
						</div>
						
						<?php if($user_info[0]->admin_id==1) { ?>
					      <div class="form-group"  ng-class="{ 'has-error' : createproduct.design_status.$invalid && !createproduct.design_status.$pristine }">
					  
								<label for="sel1">Status: <span style="color: red;">*</span></label>
								
							 <select class="form-control" id="design_status" name="design_status"  required ng-model="design_status"
								ng-options="opt.id as opt.name for opt in design_status_list">
							</select>
							
						<p ng-show="createproduct.design_status.$invalid && !createproduct.design_status.$pristine" class="help-block">Field is required.</p>
					    </div>
					<?php } else { ?>
					
					     <input  ng-init="design_status=1" type="hidden" class="form-control"  id="design_status" name="design_status" ng-model="design_status" ng-value="design_status" required>
					
					<?php }?>
					
					  <div class="form-group" style="margin-top: 19px;">
						<div class="col-xs-4 pull-right">
								
								<button type="submit" class="btn btn-primary" ng-disabled="createproduct.$invalid">Add Design </button>
					   </div>
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
 <script>
 var app=angular.module("myApp",[]);
 app.controller('productidea',function($scope,$http){
	 $scope.init=function()
	 {							/* 
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
							   $scope.id='<?php echo $data[0]->id;?>'; */
							   
							    $scope.id='<?php echo $data[0]->id;?>';
								var userid=<?php echo $user_info[0]->admin_id;?>;
								var design_man_id='<?php echo $data[0]->design_man;?>';
								//alert (userid);
								//alert (design_man_id);
								
								/* if(design_man_id==0 && userid >1)
								{
									//alert(1);
									//$scope.design_man=userid;
								}
								 if(design_man_id>0 && userid>1)
								{
									//alert(2);
									$scope.design_man=design_man_id;
								} 
								else
								{
									$scope.design_man=design_man_id;
								} */
								
								
								if(design_man_id>0 && userid >1)
								{
									$scope.design_man=design_man_id;
								}
								
								if(design_man_id==0 && userid >1)
								{
									$scope.design_man=userid;
								}
								
								if(design_man_id>0 && userid==1)
								{
									$scope.design_man=design_man_id;
								}
								
								//$scope.proof_me_link='<?php echo $data[0]->proof_me_link;?>';
								//$scope.fileinfo='<?php echo $data[0]->fileinfo;?>';
								$scope.drive_link_to_png='<?php echo $data[0]->drive_link_to_png;?>';
								$scope.design_level='<?php echo $data[0]->design_level;?>';
								
								/* $scope.color1='<?php echo $data[0]->color1;?>';
								$scope.color2='<?php echo $data[0]->color2;?>';
								$scope.color3='<?php echo $data[0]->color3;?>';
								$scope.color4='<?php echo $data[0]->color4;?>';
								$scope.color5='<?php echo $data[0]->color5;?>'; */
								//alert(<?php echo $data[0]->color1;?>);
								
								 $('#<?php echo $data[0]->color1;?>').addClass( "colorselected" );
								$('#<?php echo $data[0]->color1;?>').css("border","6px solid #e12d2d");
								
								$('#<?php echo $data[0]->color2;?>' ).addClass( "colorselected" );
								$('#<?php echo $data[0]->color2;?>').css("border","6px solid #e12d2d");
								
								$('#<?php echo $data[0]->color3;?>' ).addClass( "colorselected" );
								$('#<?php echo $data[0]->color3;?>').css("border","6px solid #e12d2d");
								$('#<?php echo $data[0]->color4;?>' ).addClass( "colorselected" );
								$('#<?php echo $data[0]->color4;?>').css("border","6px solid #e12d2d");
								$('#<?php echo $data[0]->color5;?>' ).addClass( "colorselected" );
								$('#<?php echo $data[0]->color5;?>').css("border","6px solid #e12d2d");
								
								
								
								
								
								
								
								 var design_status='<?php echo $data[0]->design_status;?>';
								
								/*
								if(userid >1 && design_status==0)
								{
									$scope.design_status=1;
								}
								else 
								{
									$scope.design_status='<?php echo $data[0]->design_status;?>';
								}
								 */
								 
								 if(userid >1 && design_status==0)
								{
									$scope.design_status=1;
								}
								
								if(userid >1 && design_status>0)
								{
									$scope.design_status='<?php echo $data[0]->design_status;?>';
								}
								
								if(userid==1 && design_status>0)
								{
									$scope.design_status='<?php echo $data[0]->design_status;?>';
								}
		 
		 $http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/adminuser/get_designer_user_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			 }).success(function(data){
				 console.log(data);
				 $scope.userlist=data;
			 });
		 
		 
		 
		 
		 $scope.design_level_list=[{
			id:'1' ,
			name:'Level1'
		 },
		 {
			id:'2' ,
			name:'Level2'  
		 },
		 {
			id:'3' ,
			name:'Level3'  
		 }
		 ];
		 
		  $scope.design_status_list=[
		 {
			id:'1' ,
			name:'Save Draft'  
		 },
		 /* {
			id:'2' ,
			name:'Worning'  
		 }, */
		 {
			id:'3' ,
			name:'Save'  
		 }
		 ];
		 
		 $scope.color_list=[
		 {
			id:'1' ,
			name:'Black'  
		 },
		 {
			id:'2' ,
			name:'Navy'  
		 },
		 {
			id:'3' ,
			name:'Grey'  
		 }
		 ];
		 
		 $scope.shirttype=[
		 {
			name:'Standard'  
		 },
		 {
			name:'Premium'  
		 }
		 ];
		 
		 
			
	}
	 
		 
		 
	  $scope.productform=function()
	 {
		  var drive_link_to_png=document.getElementById("drive_link_to_png").value;			
		  var n = drive_link_to_png.length; 
		 if(n>0)
		 {
			 var c=0;
		 $('.colorselected').each(function(index) {
			 //alert(index);
			//alert( this.id );
			$("#color"+index).val(this.id)
			c++;
			
		}); 
		//alert(c);
		if(c>0)
		{
		  $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/createproduct/update_product_design_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({design_man:$scope.design_man,
							   proof_me_link:'',
							    fileinfo:'',
								// drive_link_to_png:$scope.drive_link_to_png,
								drive_link_to_png:drive_link_to_png,
								  design_level:$scope.design_level,
								  
									 color1:$("#color0").val(),
								   color2:$("#color1").val(),
								   color3:$("#color2").val(),
								    color4:$("#color3").val(),
									 color5:$("#color4").val(),
								    design_status:$scope.design_status,
									id:$scope.id,
									shirt_type:$scope.shirt_type
							   
							   
							   })
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					 window.location.href="<?php echo base_url();?>index.php/createproduct/design_list";
				 } 
		 })
		 }
		 else
		 {
				alert("Choose Color!");
		 }	 
		 
		 
		 
	 }
	 else
	 {
		 alert("Please upload image.");
	 }
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

					document.getElementById("image_file").innerHTML='<input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required"  id="drive_link_to_png" name="drive_link_to_png" ng-model="drive_link_to_png" ng-value="drive_link_to_png" readonly required="" value="'+res+'"  >';

					

					

					

					

				})

				.error(function(){

				});

			}

		}]);

        /*  app.controller('myCtrl', ['$scope', 'fileUpload', function($scope, fileUpload){

             $scope.uploadFile = function(){

               var file = $scope.myFile;
				document.getElementById("imgpreview").innerHTML='<img class="thumb" src="<?php echo base_url();?>images/requireimages/Spinner.gif" style="width: 327px;padding: 9px 7px 13px 3px;"/>';
               

               //var uploadUrl = "<?php echo base_url();?>fileUpload";

			     var uploadUrl = "<?php echo base_url();?>index.php/createproduct/upload_file";

               fileUpload.uploadFileToUrl(file, uploadUrl);

			   console.log(fileUpload);  

            }; 
			}]); */
			
			app.controller('myCtrl', ['$scope', 'fileUpload', function($scope, fileUpload){
			
			$scope.setFiles=function(element)
			{
			console.log(element.files);
			var file = element.files[0];
			//console.log('file is ' );
              // console.dir(file);
			  document.getElementById("imgpreview").innerHTML='<img class="thumb" src="<?php echo base_url();?>images/requireimages/Spinner.gif" style="width: 327px;padding: 9px 7px 13px 3px;"/>';
			   var uploadUrl = "<?php echo base_url();?>index.php/createproduct/upload_file";
               fileUpload.uploadFileToUrl(file, uploadUrl);
			   console.log(fileUpload); 
		    }
             
			
         }]);

			

      </script>
 <script>
var d = document.getElementById("design");
d.className += " active";
function colorchoose(str)
{
	//alert(str);
	var x=$( str ).hasClass( "colorselected" );
	//alert(x)
	var noofcolorchoose= $("#noofcolorchoose").val();
	//alert(noofcolorchoose);
	
	var noofselected=$('.colorselected').length;
	//alert(noofselected);
	
	
	
	if(x==true)
	{
		
		$(str ).removeClass( "colorselected" );
		$(str).css("border","0px solid #fff");
		if(noofcolorchoose>0)
		{
		noofcolorchoose=parseInt(noofcolorchoose)-1;
		$("#noofcolorchoose").val(noofcolorchoose)
		}
		
		/* if(noofcolorchoose==0)
		{
		//noofcolorchoose=noofcolorchoose-1;
		$("#noofcolorchoose").val(1)
		} */
	}
	else
	{
		if(noofselected>4)
		{
			alert("Already 5 colors selected");
		}
		else
		{
			$(str ).addClass( "colorselected" );
		
		
		$(str).css("border","6px solid #e12d2d"); 
		if(noofcolorchoose>0)
		{
		noofcolorchoose=parseInt(noofcolorchoose)+1;
		$("#noofcolorchoose").val(noofcolorchoose)
		}
		if(noofcolorchoose==0)
		{
		//noofcolorchoose=noofcolorchoose+1;
		$("#noofcolorchoose").val(1)
		}
		}
		
	}
	
}

</script>