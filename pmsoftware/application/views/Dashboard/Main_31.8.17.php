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
			   <div id="ideas_custom" class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #d1e2ec;padding: 1px 8px 7px 9px;">
			   <h4 style="border-bottom: 2px solid #101010;font-size: 23px;padding: 0 0 5px;font-family: -webkit-pictograph;"><span class="sem-report-block-type-circle sem-report-block-type-circle-0"></span>IDEAS</h4>
			   <!--<p style="text-align: center;font-size: 29px;font-weight: bold;">
			   <h5 style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;">Ideas Ready : <span style="padding: 0px;"><b>{{totalcomplete}}</b></span></h5></p>-->
			   
			   <div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;">Ideas Ready :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{totalcomplete}}</b></div> 
				</div>
			   <div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;" >Working :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{idea_working}}</b></div> 
				</div>
			   
			   <!--<div class="row"> 
				<div class="col-xs-12 col-centered col-min" >
				<span style="padding: 0 3px;"><b>A+</b></span>
			   <span style="padding: 0 3px;"><b>A</b></span>
			   <span style="padding: 0 3px;"><b>B</b></span>
			   <span style="padding: 0 3px;"><b>C</b></span>
			   <span style="padding: 0 3px;"><b>D</b></span>
			   <span style="padding: 0 3px;"><b>E</b></span>
			   <span style="padding: 0 3px;"><b>F</b></span>
			   </div>
				</div>-->
				<div class="row" > 
				<div class="col-xs-12 col-centered col-min" style="margin-left: -13px;" >
				<div class="col-xs-2 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div ng-if="p.Priority==1" style="font-weight: bold;">A+</div>
					<div ng-if="p.Priority==1">{{p.total}}</div>
					
					<div ng-if="p.Priority==2" style="font-weight: bold;">A</div>
					<div ng-if="p.Priority==2">{{p.total}}</div>
					
					<div ng-if="p.Priority==3" style="font-weight: bold;">B</div>
					<div ng-if="p.Priority==3">{{p.total}}</div>
					
					<div ng-if="p.Priority==4" style="font-weight: bold;">C</div>
					<div ng-if="p.Priority==4">{{p.total}}</div>
					
					<div ng-if="p.Priority==5" style="font-weight: bold;">D</div>
					<div ng-if="p.Priority==5">{{p.total}}</div>
					
					
					 
				</div>
				<!--<div class="col-xs-1 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div ng-if="p.Priority==2"style="font-weight: bold;">A</div>
					<div ng-if="p.Priority==2">{{p.total}}</div>
				</div>
				<div class="col-xs-1 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div ng-if="p.Priority==3"style="font-weight: bold;">B</div>
					<div ng-if="p.Priority==3">{{p.total}}</div>
				</div>
				<div class="col-xs-1 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div style="font-weight: bold;">C</div>
					<div ng-if="p.Priority==4">{{p.total}}</div>
				</div>
				<div class="col-xs-1 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div style="font-weight: bold;">D</div>
					<div ng-if="p.Priority==5">{{p.total}}</div>
				</div>-->
				<!--<div class="col-xs-1 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div style="font-weight: bold;">E</div>
					<div ng-if="p.Priority==6">{{p.total}}</div>
				</div>
				<div class="col-xs-1 col-centered col-min" ng-repeat="p in idea_priority" >
				    <div style="font-weight: bold;">F</div>
					<div ng-if="p.Priority==7">{{p.total}}</div>
				</div>-->
			   <!--<b style="padding: 0 3px;" ng-if="p.Priority==1" >{{p.total}} </b>
			   <b style="padding: 0 3px;" ng-if="p.Priority==2" >{{p.total}} </b>
			   <b style="padding: 0 3px;" ng-if="p.Priority==3" >{{p.total}} </b>
			   <b style="padding: 0 3px;" ng-if="p.Priority==4" >{{p.total}} </b>
			   <b style="padding: 0 3px;" ng-if="p.Priority==5" >{{p.total}} </b>
			   <b ng-if="p.Priority==6" >{{p.total}} </b>
			   <b ng-if="p.Priority==6" >{{p.total}}  </b>-->
			   
			   </div>
				</div>
			   
			   
			   
			   
			   <!--<p style="text-align: center;font-size: 29px;font-weight: bold;">
			   
			   <h5> 
			   <span><b>A+</b></span>
			   <span><b>A</b></span>
			   <span><b>B</b></span>
			   <span><b>C</b></span>
			   <span><b>D</b></span>
			   <span><b>E</b></span>
			   <span><b>F</b></span>
			   </h5>
			   <h5> 
			   <span ng-repeat="p in idea_priority">
			   <b ng-if="p.Priority==1" >{{p.total}} </b>
			   <b ng-if="p.Priority==2" >{{p.total}} </b>
			   <b ng-if="p.Priority==3" >{{p.total}} </b>
			   <b ng-if="p.Priority==4" >{{p.total}} </b>
			   <b ng-if="p.Priority==5" >{{p.total}} </b>
			   <b ng-if="p.Priority==6" >{{p.total}} </b>
			   <b ng-if="p.Priority==6" >{{p.total}}  </b>
			   
			   
			   </span></h5>
			   </p>-->
			    
			   </div>
			   </div>
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #d1e2ec;padding: 1px 8px 8px 9px;">
			   <h4 style="border-bottom: 2px solid #101010;font-size: 23px;padding: 0 0 5px;font-family: -webkit-pictograph;"><span class="sem-report-block-type-circle sem-report-block-type-circle-0" style="background-color:#bc0034"></span>DESIGNS </h4>      
			    <div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;" >Designs Ready :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{designcomplete}}</b></div> 
				</div>
				
				<div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;" >Working :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{design_working}}/{{totalcomplete}}</b></div> 
				</div>
				
				<!--<div class="row"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;" >Awaiting Approval :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{design_waiting_app}}</b></div> 
				</div>-->
				
			   </div> 
			   </div>
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #d1e2ec;padding: 1px 8px 49px 9px;">
			   <h4 style="border-bottom: 2px solid #101010;font-size: 23px;padding: 0 0 5px;font-family: -webkit-pictograph;"><span style="background-color:#0cbc00" class="sem-report-block-type-circle sem-report-block-type-circle-0"></span>COPYWRITING</h4>
			   
			   <div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;">Copy Ready :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{copycomplete}}</b></div> 
				</div>
				<div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;">Working :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{copy_working}}/{{designcomplete}}</b></div> 
				</div>
			   
			    
			   
			   </div>
			   
			   
			   
			   </div>
			   <div class="col-xs-3 col-centered col-min" >
			   <div style="background-color: #d1e2ec;padding: 1px 8px 49px 9px;">
			   <h4 style="border-bottom: 2px solid #101010;font-size: 23px;padding: 0 0 5px;font-family: -webkit-pictograph;"><span style="background-color:#ef5572" class="sem-report-block-type-circle sem-report-block-type-circle-0"></span>UPLOADS</h4>
			   
			   <div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;">Ready :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{upload_waiting}}</b></div> 
				</div>
				
				<div class="row" style="padding: 0px 0px 5px 1px;border-bottom: 1px solid #fff;"> 
				<div class="col-xs-6 col-centered col-min" style="font-weight: bold;">Waiting :</div>
				<div class="col-xs-6 col-centered col-min" ><b>{{uploadcomplete}}</b></div> 
				</div>
				
			   </div>  
			   
			   </div>
			</div>
			<hr>
			
    </div>
	
    </section>
    <!-- /.content -->
	
	<section class="content">
     <div class="container">
			<div class="row row-centered">
			
			
			<div class="">
		                                <div class="col-md-12">
                                    <!-- Nav tabs -->
									<div class="">
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										
												 <div class="row table_title " >
									
									   <div class="col-xs-3 col-centered col-min">
											  <h3>Thumbnail</h3> 
										</div>
										<div class="col-xs-3 col-centered col-min">
											  <h3> Ideas</h3>
										</div>    

										<div class="col-xs-3 col-centered col-min">
											 <h3> Designs</h3>
										</div>  
										<div class="col-xs-3 col-centered col-min">
											  <h3>Copywrites</h3>
										</div> 
																			
									</div>
									
									
									
									
									<div class="row " ng-repeat="item in idealist " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
									
									    <div class="col-xs-3 col-centered col-min">
										
										      <div ng-if="item.drive_link_to_png!=''">
											     
												<a href="javascript:void(0)"data-toggle="modal" data-target="#drvModal{{$index}}"><img class="thumb" src="<?php echo base_url();?>{{item.drive_link_to_png}}" style="width:43%;"/></a>
												<div class="modal fade" id="drvModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											       
													 
													  <div class="modal-content">
														 <div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">×</button>
														  
														</div>
														<div class="modal-body">
														  <p><img class="thumb" src="<?php //echo base_url();?>{{item.drive_link_to_png}}" style="width:100%;"/></p>  
														</div>
														
													  </div>
													  
													</div>
												  </div>
												
												
											  </div>
											  
											  
											  
										
										<div ng-if="item.drive_link_to_png==''">
											  <a href="javascript:void(0)"data-toggle="modal" data-target="#imgModal{{$index}}"><img class="thumb" src="<?php echo base_url();?>{{item.Thumbnail}}" style="width:43%;"/></a>
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
											</div>  
											  
										</div>
										<div class="col-xs-3 col-centered col-min">
										
										 <div>
										      
											  <input type="checkbox" class="read-more-state" id="ideapost-{{$index}}" />

											  <ul class="read-more-wrap"> 
											    <li><b>Idea Man:</b> {{item.admin_first_name}} {{item.admin_last_name}}</li>
												<li><b>IdeaUrl:</b><a href="{{item.idea_url}}" target="_blank">{{item.idea_url|domain}}</a></li>
												<li><b>Date:</b>{{item.idea_post_time}}</li>
												<li><b>T-shirt ID:</b><td>T0{{item.id}}</td></li>
												
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
											
											<li class="read-more-target" >
											<b>P-Keyword:</b> <a href="javascript:void(0)"data-toggle="modal" data-target="#PmyModal{{$index}}">{{item.Primaryword| limitTo:20}}...</a>
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
												  </li>
											    <li class="read-more-target"><b>S-Keyword:</b><a href="javascript:void(0)"data-toggle="modal" data-target="#SmyModal{{$index}}">{{item.Secondaryword| limitTo:20}}...</a>
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
												  </div></li>
											     <li class="read-more-target"><b>Tags:</b>
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
												 </li>
												  <li class="read-more-target" ><b>Notes:</b>
												  <a href="javascript:void(0)"data-toggle="modal" data-target="#myModal{{$index}}">{{item.Notes| limitTo:20}}...</a>
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
												  </div></li>
											  
											  
											  </ul>
											  
											  <label for="ideapost-{{$index}}" class="read-more-trigger"></label>
											</div>
										
										
										         
										</div>
										<div class="col-xs-3 col-centered col-min">
										  <div>
											  <input type="checkbox" class="read-more-state" id="designpost-{{$index}}" />

											  <ul class="read-more-wrap">
											    
												<li><b>Designer:</b> {{item.designer_first_name}} {{item.designer_last_name}}</li>
												
												<li> <b>Date:</b>{{item.design_post_time}}</li>
												<!--<li><b>Drive Link to PNG:</b>
												<a href="javascript:void(0)"data-toggle="modal" data-target="#drvModal{{$index}}"><img class="thumb" src="<?php //echo base_url();?>{{item.drive_link_to_png}}" style="width:90%;"/></a>
												<div class="modal fade" id="drvModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											       
													 
													  <div class="modal-content">
														 <div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">×</button>
														  
														</div>
														<div class="modal-body">
														  <p><img class="thumb" src="<?php //echo base_url();?>{{item.drive_link_to_png}}" style="width:100%;"/></p>  
														</div>
														
													  </div>
													  
													</div>
												  </div>
												
												</li>-->
												
												
												 <li ng-if="item.design_level==1"><b>Level:</b> Level1</li>
											 <li  ng-if="item.design_level==2"><b>Level:</b> Level2</li>
											 <li  ng-if="item.design_level==3"><b>Level:</b> Level3</li>
											 
											 
											 
											 <li class="">
											      <div ng-if="item.color1!=''" class="foo2" style="background: #{{item.color1}};"></div>
													<div ng-if="item.color2!=''" class="foo2" style="background: #{{item.color2}};"></div>
													<div ng-if="item.color3!=''" class="foo2" style="background: #{{item.color3}};"></div>
													<div ng-if="item.color4!=''" class="foo2" style="background: #{{item.color4}};"></div>
													<div ng-if="item.color5!=''" class="foo2" style="background: #{{item.color5}};"></div>
											</li>
											 <li class="read-more-target">
											 <b>Shirt Type :</b>{{item.shirt_type}} 
											</li>											 
												
											  </ul>
											  
											  <label for="designpost-{{$index}}" class="read-more-trigger"></label>
											</div>
										   
										   
										   
										    
										    
												
											
										         
										</div>
										<div class="col-xs-3 col-centered col-min"> 
											
										   
										   <div>
											  <input type="checkbox" class="read-more-state" id="copypost-{{$index}}" />

											  <ul class="read-more-wrap">
											   
												<li><b>Copy Writer:</b> {{item.copy_first_name}} {{item.copy_last_name}}</li>
												<li><b>Brand Name:</b>{{item.Brand_Name}}</li>
												<li> <b>Date:</b>{{item.copy_post_time}}</li>
												
												<li class="read-more-target"><b>Title:</b>{{item.Title}}</li>
												<li class="read-more-target"><b>Price:</b>{{item.Price}}</li>
												<li class="read-more-target"><b>Bullet1:</b><a href="javascript:void(0)"data-toggle="modal" data-target="#BumyModal{{$index}}">{{item.Bullet1| limitTo:20}}...</a>
												<div class="modal fade" id="BumyModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Bullet1}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div></li>
												<li class="read-more-target"><b>Bullet2:</b><a href="javascript:void(0)"data-toggle="modal" data-target="#Bu2myModal{{$index}}">{{item.Bullet2| limitTo:20}}...</a>
												<div class="modal fade" id="Bu2myModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Bullet2}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div></li>
												<li class="read-more-target"><b>Product Description:</b><a href="javascript:void(0)"data-toggle="modal" data-target="#PdmyModal{{$index}}">{{item.Product_description| limitTo:20}}...</a>
												<div class="modal fade" id="PdmyModal{{$index}}" role="dialog">
											     <div class="modal-dialog">
											
													  <!-- Modal content-->
													  <div class="modal-content">
														<!--<div class="modal-header">
														  <button type="button" class="close" data-dismiss="modal">&times;</button>
														  <h4 class="modal-title">Modal Header</h4>
														</div>-->
														<div class="modal-body">
														  <p>{{item.Product_description}}</p>
														</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													  </div>
													  
													</div>
												  </div></li>
											  </ul>
											  
											  <label for="copypost-{{$index}}" class="read-more-trigger"></label>
											</div>
										   
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
		 console.log(data);
		 //$scope.idealist=data;
		 $scope.totalcomplete=data.totalcomplete;
		 $scope.designcomplete=data.designcomplete;
		 $scope.copycomplete=data.copycomplete;
		 $scope.uploadcomplete=data.uploadcomplete;
		 $scope.priority_items=data.Prirityarray;
		 
		  $scope.idea_working=data.idea_working;
		   $scope.design_waiting_app=data.design_waiting_app;
		    $scope.design_working=data.design_working;
			 $scope.copy_working=data.copy_working;
			 $scope.upload_waiting=data.upload_waiting;
			 $scope.idea_priority=data.idea_priority;
		 
	 });
	$http({
	  method:"post",
	  url:'<?php echo base_url();?>index.php/createproduct/get_idea_list',
	  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	 }).success(function(data){
		 console.log(data);
		 $scope.idealist=data;
	 });
		
		

	 
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