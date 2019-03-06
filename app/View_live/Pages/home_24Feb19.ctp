<!--================Slider Reg Area =================-->
        <section class="slider_area">
            <div class=slider_inner>
                <div class="rev_slider fullwidthabanner"  data-version="5.3.0.2" id="home-slider2" style="min-height:796px;    padding-bottom: -400px;margin-bottom: 400px;">
                    <ul>
		    <?php foreach($slides as $k=>$value):$photoImg='slides_thumb/'.$value['Slide']['photo'];?>
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <?php echo $this->Html->image($photoImg,array('alt'=>$value['Slide']['slide_name'],'class'=>'rev-slidebg','data-bgposition'=>'center center','data-bgfit'=>'cover','data-bgrepeat'=>'no-repeat','data-bgparallax'=>'10'));?>
                            
                        </li>
			<?php endforeach;unset($k);unset($value);?>
		    </ul> 
                </div><!-- END REVOLUTION SLIDER -->
            </div>
	    <?php echo $this->Form->create('Viewprofile', array( 'controller' => 'Viewprofiles', 'action' => 'index'));?>
            <div class="advanced_search">
                <div class="container">
                    <div class="search_inner">
                        <div class="search_item">
                            <h5><?php echo __('I am looking for');?></h5>
			    <?php   echo $this->Form->select('sex',array('Female'=>__('Bride'),'Male'=>__('Groom')),array('class'=>'selectpicker','empty'=>__('All Gender'))); ?>
                        </div>
                        <div class="search_item">
                            <h5><?php echo __('Located In');?></h5>
			    <?php   echo $this->Form->select('state_id',$stateName,array('class'=>'selectpicker','empty'=>__('All State'))); ?>
                        </div>
                        <div class="search_item">
                            <h5><?php echo __('Interested In');?></h5>
			    <?php   echo $this->Form->select('habit_id',$habitName,array('style'=>'','class'=>'selectpicker','empty'=>__('Interest'))); ?>
                        </div><br/><br/>
                        <div class="search_item">
                            <h5><?php echo __('From');?></h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			    <?php for($i=18;$i<=100;$i++){
		              $ageFrom[$i]=$i;
		              } ?>
		              <?php   echo $this->Form->select('age_from',$ageFrom,array('class'=>'selectpicker','style'=>'','empty'=>__('From'))); ?>
                        </div>
			<div class="search_item">
                            <h5><?php echo __('To');?></h5>
			    <?php for($i=18;$i<=100;$i++){
				  $ageTo[$i]=$i;
				} ?>
			       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   echo $this->Form->select('age_to',$ageTo,array('class'=>'selectpicker','style'=>'','empty'=>__('To'))); ?>
			</div>
			<div class="search_item">
                            <h5><?php echo __('Status');?></h5>
			    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   echo $this->Form->select('maritialstatus_id',$maritialstatus,array('class'=>'selectpicker','empty'=>__('All Status'))); ?>
			    
                        </div>
			
                        <div class="search_item">
                            <center><button type="submit" value="LogIn" class="btn form-control login_btn"><?php echo __('Find Matches');?></button></center>
                        </div>
                    </div>
                </div>
            </div>
	    <?php echo$this->Form->end();?>
        </section>
        <!--================End Slider Reg Area =================-->
        <!--================Featured Members slider Area =================-->
        <section class="register_members_slider" style="background-color:white;">
            <div class="container">
                <div class="welcome_title">
                    <h3><?php echo __('Featured Profiles');?></h3>
		    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
                <div class="r_members_inner">
		<?php $loginUrl=$this->Html->url(array('controller'=>'Users','action'=>'login','Pages'));
	foreach($post as $value):$id=$value['Member']['id'];
	if($value['Member']['photo'] && $value['Member']['photo_status']=='Approved')
	$memberImg='member_thumb/'.$value['Member']['photo'];
	else
	$memberImg='User.png';
	if($value['Member']['sex']=='Male')
	$sex=__('About Him');
	else
	$sex=__('About Her');
	$url=$this->Html->url(array('controller'=>'Viewprofiles'));
	$age=$value[0]['age'];
	
	if($value[0]['age']){ $ageValue=$value[0]['age'].'&nbsp;YRS';}else{ $ageValue='N/A';}
	
	
	?>
                    <div class="item">
		       <?php  if($this->Session->check('Member')){?> 
		    <a href="javascript:void(0);" onclick="show_modal('<?php echo$url;?>/view/<?php echo$id;?>/<?php echo$age;?>');">
		    <?php echo$this->Html->image($memberImg,array('class'=>'img-responsive','alt' =>$value['Member']['name']),array('escape' => false));?>
                        <h4><?php echo $value['Member']['name'];?>, <?php echo $value['Country']['name'];?><br><?php echo $value['Employed']['name'];?></h4>
                        <h5><?php echo $value['Member']['profileId'];?></span><br><?php if($value[0]['age']){ echo $value[0]['age'].'&nbsp;years old';}else{echo 'N/A';}?></h5>
                    </a>
		    <?php }else {
		     echo$this->Html->link($this->Html->image($memberImg,array('class'=>'','alt' =>$value['Member']['name'])).'<h4>'.$value['Member']['name'].'('.$value['Member']['profileId'].'),'.$value['Country']['name'].'<br/>'.$value['Employed']['name'].'</h4>',array('controller'=>'Users','action'=>'login','Pages'),array('escape' => false));
		     }?>
		    </div>
		    <?php endforeach;unset($value);?>
		
            </div>
        </section>
        <!--================End Featured Members  slider Area =================-->
        <!--================Find Your Soul Area =================-->
        <section class="find_soul_area">
            <div class="container">
                
                <div class="row">
		<div class="col-md-3">
		<h3><?php echo __('News & Events');?></h3><i class="fa fa-style1 fa fa-bullhorn"></i>
	        
		<marquee align="top" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2" height="218">
				    <ul>				
					<?php foreach($news as $value):$id=$value['News']['page_url'];?>
					<li><?php echo$this->Html->link($value['News']['news_title'],array('controller'=>'News','action'=>'show',$id));?></li>
					<?php endforeach;unset($value);?>				  
				  </ul>
		</marquee>
		</div>
		<div class="welcome_title">
                    <h3>Step to Find Your Soul mate</h3>
                    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
                    <div class="col-md-3">
                        <div class="find_soul_item">
                            <img src="img/soul-icon/soul-1.png" alt="">
                            <h4>Create a profile</h4>
                            <p>Sign Up to build a sensational profile of yours.Remember ! Its your first-step to find your perfect match.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="find_soul_item">
                            <img src="img/soul-icon/soul-2.png" alt="">
                            <h4>Find matches </h4>
                            <p>This is the second step.Find your better half on your expectations.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="find_soul_item">
                            <img src="img/soul-icon/soul-3.png" alt="">
                            <h4>Start Knowing</h4>
                            <p>Know your choice.Have a chit chat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Find Your Soul Area =================-->
        
	<!--================Find Your Soul Area =================-->
        <section class="find_soul_area" style="background-color:white;">
            <div class="container">
	     <div class="welcome_title">
                    <h3>Find Your Soul mate</h3>
                    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
                <div class="row">
                    <div class="welcome_item">
               <h3><?php echo __('Religion');?> :</h3>
	       <?php foreach($religion as $value):$id=$value['Religion']['id'];$name="religion";
	             echo '<strong>'.$this->Html->link($value['Religion']['name'],array('controller'=>'Viewprofiles',$id,$name),array('escape' => false,'title'=>$value['Religion']['name'],'class'=>'text-danger')).'</strong>';?>
		    <span>|</span>
		    <?php endforeach;unset($value);?>
	        </div>
	        <div class="welcome_item">
               <h3><?php echo __('Community');?> :</h3>
		     <?php foreach($mothertongue as $value):$id=$value['Mothertongue']['id'];$name="mothertongue";
	             echo '<strong>'.$this->Html->link($value['Mothertongue']['name'],array('controller'=>'Viewprofiles',$id,$name),array('escape' => false,'title'=>$value['Mothertongue']['name'],'class'=>'text-danger')).'</strong>';?>
		    <span>|</span>
		    <?php endforeach;unset($value);?>
	        </div>
	        
	        <div class="welcome_item" style="padding: 5px;">
               <h3><?php echo __('Location');?> :</h3>
	       <?php foreach($state as $value):$id=$value['State']['id'];$name="state";
	       echo '<strong>'.$this->Html->link($value['State']['name'],array('controller'=>'Viewprofiles',$id,$name),array('escape' => false,'title'=>$value['State']['name'],'class'=>'text-danger')).'</strong>';?>
	       <span>|</span>
	       <?php endforeach;unset($value);?>
	      </div>
                </div>
            </div>
        </section>
        
	<!--================Testimonials Area =================-->
        <section class="testimonials_area" style="background-color:#e74c3c;">
            <div class="container">
                <div class="welcome_title">
                    <h3><?php echo __('Success Stories');?></h3>
                    <?php echo$this->Html->image('w-title-b.png');?>
                </div>
                <div class="testimonials_slider">
                    <?php foreach($testimonials as $postTestimonial):
		 $id=$postTestimonial['Testimonial']['id'];
		  if($postTestimonial['Testimonial']['photo'])
		  $photoImg='testimonial_thumb/'.$postTestimonial['Testimonial']['photo'];
		  else
		  $photoImg='User.png';
		  if($postTestimonial['Testimonial']['member_id']){
		    $photoImg='member_thumb/'.$postTestimonial['Member']['photo'];
		   }
		   ?>
                    <div class="item">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="test_left_content">
                                    <h4><?php echo substr($postTestimonial['Testimonial']['description'],0,90);?></strong></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="test_man">
				<?php echo $this->Html->image($photoImg,array('class'=>'img-circle','width'=>'80','height'=>'100','alt' => $postTestimonial['Testimonial']['name']));?>
                                    
                                    <h4><?php echo$postTestimonial['Testimonial']['name'];?></h4>
                                    <h5><?php echo $this->Time->format('M d, Y',h($postTestimonial['Testimonial']['created'])); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
		   <?php endforeach;unset($postTestimonial);?> 
		    
                </div>
            </div>
        </section>
        <!--================End Testimonials Area =================-->
        

        