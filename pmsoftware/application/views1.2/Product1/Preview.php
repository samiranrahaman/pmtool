<div class="content-wrapper" ng-controller="productidea">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Preview</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Preview</li>
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
                                    <!--<ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"   ><a  href="<?php echo base_url();?>index.php/createproduct/get_preview" aria-controls="home" role="tab" >Preview</a>
										</li>
                                        
                                    </ul>-->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
										
										<?php //echo "<pre>"; print_r($p_data);?>
										
										<div class="row row_custom" >
									
									   <div class="col-xs-6 col-centered col-min">
											   <img src="<?php echo base_url();?><?php echo $p_data[0]->Thumbnail ;?>" style="width:74%;"/>
										</div>
										<div class="col-xs-6 col-centered col-min">
											   <p><b>IdeaUrl:</b> <a href="http://<?php echo $p_data[0]->idea_url ;?>" target="_blank"><?php echo $p_data[0]->idea_url ;?></a></p>
											   
												
												<?php if($p_data[0]->Priority==1) {?>
												<p><span style="background-color: #21ba23;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">A+</span></p>
												<?php } ?>
												<?php if($p_data[0]->Priority==2) {?>
												<p><span style="background-color: #a4dea4;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">A</span></p>
												<?php } ?>
												<?php if($p_data[0]->Priority==3) {?>
												
												<p><span style="background-color: #ea7a0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">B</span></p>
												<?php } ?>
												<?php if($p_data[0]->Priority==4) {?>
												<p><span style="background-color: #e3c09d;align-content: center;text-align: center;font-weight: bold;color: #fff;padding: 3px 8px 6px 10px;">C</span>
												</p>
												<?php } ?>
												<?php if($p_data[0]->Priority==5) {?>
												
												<p><span style="background-color: #e39dd6;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">D </span></p>
												<?php } ?>
												<?php if($p_data[0]->Priority==6) {?>
												<p> <span style="background-color: #ba219d;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">E </span></p>
												<?php } ?>
												<?php if($p_data[0]->Priority==7) {?>
												<p><span style="background-color: #ea0c0c;align-content: center;text-align: center;font-weight: bold;color: #fff; padding: 3px 8px 6px 10px;">F</span></p>
												<?php } ?>
												<p><b>P-Keyword:</b> <?php echo $p_data[0]->Primaryword;?></p>
												<p><b>S-Keyword:</b> <?php echo $p_data[0]->Secondaryword;?></p>
												<p><b>Note:</b> <?php echo $p_data[0]->Notes;?></p>
												
												
												
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
